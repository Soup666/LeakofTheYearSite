<?php

namespace App\Service;

use App\Entity\Artist;
use App\Entity\LeakFile;
use App\Repository\ArtistRepository;
use App\Repository\LeakFileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;

class LeakFileService
{
    public function __construct(
        private readonly FTPService $FTPService,
        private readonly LeakFileRepository $leakFileRepository,
        private readonly ArtistRepository $artistRepository,
        private readonly EntityManagerInterface $entityManager
    ){}

    public function updateEntities(): void
    {
        $currentEntities = $this->leakFileRepository->findAll();
        $dbFiles = $this->FTPService->getAllFiles();

        foreach ($dbFiles as $dbFile) {
            $leakFile = new LeakFile();
            if (in_array($dbFile['path'], array_map(fn($entity) => $entity->getPath(), $currentEntities))) {
                $leakFile = $currentEntities[array_search($dbFile['path'], array_map(fn($entity) => $entity->getPath(), $currentEntities))];
            }
            $leakFile->setName($dbFile['name']);
            $leakFile->setPath($dbFile['path']);
            $leakFile->setExtension($dbFile['extension']);
            $leakFile->setArtist($this->artistRepository->findOneBy(['name' => $dbFile['artist']]));
            $this->entityManager->persist($leakFile);
        }
        $this->entityManager->flush();
    }

    public function updateArtists(): void
    {
        $currentEntities = $this->artistRepository->findAll();
        $dbArtists = $this->FTPService->getDirectories();

        foreach ($dbArtists as $artist) {
            $artistEntity = new Artist();
            if (in_array($artist, array_map(fn($entity) => $entity->getName(), $currentEntities))) {
                $artistEntity = $currentEntities[array_search($artist, array_map(fn($entity) => $entity->getName(), $currentEntities))];
            }
            $artistEntity->setName($artist);
            $artistEntity->setArchived(false);
            $artistEntity->setSuspended(false);
            $this->entityManager->persist($artistEntity);
        }
        $this->entityManager->flush();
    }
}