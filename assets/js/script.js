const trash = document.getElementsByClassName('enclosure__delete');
const popup = document.getElementsByClassName('popup');
const deleteInput = document.getElementById('delete__id');


for (let i = 0; i < popup.length; i++) {
    console.log(popup);
    popup[i].addEventListener('click', (e) =>{
        if(!e.target.classList.contains('notClose')){
            popup[i].classList.remove('active');
        }
    })
    
}
for (let i = 0; i < trash.length; i++) {
    trash[i].addEventListener('click', () =>{
        document.getElementById('delete__enclosure').classList.add('active');
        deleteInput.value = trash[i].getAttribute('id');
    })
    
}