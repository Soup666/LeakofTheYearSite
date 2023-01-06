<?php

namespace App\Controller\Api;

use App\Repository\LeakFileRepository;
use App\Service\LeakFileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/api/v1/leak_file/')]
class LeakFileApi extends AbstractController
{
    public function __construct(
        private readonly LeakFileRepository $leakFileRepository
    ){}

    #[Route('update_files', name: 'api_v1_update_files')]
    public function updateFiles(LeakFileService $leakFileService): Response
    {
        $leakFileService->updateEntities();
        $this->addFlash('success', 'Entities updated');
        return $this->redirectToRoute('tapes');
    }

    #[Route('update_artists', name: 'api_v1_update_artists')]
    public function updateArtists(LeakFileService $leakFileService): Response
    {
        $leakFileService->updateArtists();
        $this->addFlash('success', 'Entities updated');
        return $this->redirectToRoute('artists');
    }


    #[Route('get_file/{id}', name: 'api_v1_leak_files', methods: ['GET'])]
    public function getFile($id = null) {

        if (!$id) {
            return $this->json(['status' => 'failure', 'message' => 'No file specified']);
        }

        $entity = $this->leakFileRepository->findOneBy(['id' => $id]);

        if (!$entity) {
            return $this->json(['status' => 'failure', 'message' => 'Failed to Match ID']);
        }

        return $this->json(
            [
                'status' => 'success',
                'data' => [
                    'name' => $entity->getName(),
                    'path' => $entity->getPath(),
                    'extension' => $entity->getExtension(),
                    'artist_name' => $entity->getArtist()->getName(),
                    'artist_id' => $entity->getArtist()->getId()
                ]
            ]);
    }
}