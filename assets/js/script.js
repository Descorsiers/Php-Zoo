const trashEnclosures = document.getElementsByClassName('enclosure__delete');
const trashAnimals = document.getElementsByClassName('animal__delete');
const popup = document.getElementsByClassName('popup');
const deleteInput = document.getElementById('delete__id');

// Hide the popup if we don't click on the popup

for (let i = 0; i < popup.length; i++) {
    console.log(popup);
    popup[i].addEventListener('click', (e) =>{
        if(!e.target.classList.contains('notClose')){
            popup[i].classList.remove('active');
        }
    })
}

// Show the popup for deleting an enclosure + add at the form's input the id of the enclosure we want to delete

for (let i = 0; i < trashEnclosures.length; i++) {
    trashEnclosures[i].addEventListener('click', () =>{
        document.getElementById('delete__enclosure').classList.add('active');
        deleteInput.value = trashEnclosures[i].getAttribute('id'); 
    })
}

// Show the popup for deleting an animal + add at the form's input the id of the animal we want to delete

for (let i = 0; i < trashAnimals.length; i++) {
    trashAnimals[i].addEventListener('click', () =>{
        document.getElementById('delete__animal').classList.add('active');
        deleteInput.value = trashAnimals[i].getAttribute('id'); 
    })
}