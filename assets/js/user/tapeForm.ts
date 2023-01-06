
import {initChoices} from '../dashkit/choices';
import Choices from "choices.js";

let tapeSelect: HTMLSelectElement = document.querySelector('#tape_db_file');
let artistSelect: HTMLSelectElement = document.querySelector('#tape_artist');
let nameInput: HTMLInputElement = document.querySelector('#tape_name');
let extensionInput: HTMLInputElement = document.querySelector('#tape_extension');

let tapeChoice = initChoices(tapeSelect, {}) as Choices;
let artistChoice = initChoices(artistSelect, {}) as Choices;


tapeSelect.addEventListener('change', (event) => {
    fetch('/api/v1/leak_file/get_file/' + tapeSelect.value)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            console.log(extensionInput);
            nameInput.value = (data.data.name);
            extensionInput.value = (data.data.extension);
            artistChoice.setChoiceByValue(data.data.artist_id);
        });
});
