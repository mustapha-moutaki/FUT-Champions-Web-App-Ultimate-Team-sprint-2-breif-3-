//bottom
let addPlayerBtn = document.getElementById('submitbtn');

// All form elements
let    form = document.getElementById('form')
let    selected = document.getElementById('position');
let    playerName = document.getElementById('name');
let    photo = document.getElementById('photo');
let    position = document.getElementById('position');
let    nationality = document.getElementById('nationality');
let    flag = document.getElementById("flag");
let    clubName = document.getElementById('club');
let    clubLogo = document.getElementById('logo');
let    rating = document.getElementById("rating");
//      player
let    pace = document.getElementById('pace');
let    shooting = document.getElementById('shooting');
let    passing = document.getElementById('passing');
let    dribbling = document.getElementById('dribbling');
let    defending = document.getElementById('defending');
let    physical = document.getElementById('physical');
//      goal keper
let    diving = document.getElementById('diving');
let    handling = document.getElementById('handling');
let    kicking = document.getElementById('kicking');
let    reflexes = document.getElementById('reflexes');
let    speed = document.getElementById('speed');
let    positioning = document.getElementById("positioning");

//function to display inputs for selected position
selected.addEventListener('change', () => {
    if (selected.value === 'GK') {
        document.getElementById('goolKeper-caracteristic').style.display = 'block';
        document.getElementById('player-caracteristic').style.display = 'none';
    } else {
        document.getElementById('goolKeper-caracteristic').style.display = 'none';
        document.getElementById('player-caracteristic').style.display = 'block';
    }
    
});
addPlayerToField()


// return all data from local storage if is it not empty
let playersData = [];
if (localStorage.player != null) {
    playersData = JSON.parse(localStorage.player);
} else {
    playersData = [];
}

// reset inputs function
function reset(){
document.getElementById('position').value ='';
document.getElementById('name').value ='';
document.getElementById('photo').value ='';
document.getElementById('position').value ='';
document.getElementById('nationality').value ='';
document.getElementById("flag").value ='';
document.getElementById('club').value ='';
document.getElementById('logo').value ='';
document.getElementById("rating").value ='';
//      player
document.getElementById('pace').value ='';
document.getElementById('shooting').value ='';
document.getElementById('passing').value ='';
document.getElementById('dribbling').value ='';
document.getElementById('defending').value ='';
document.getElementById('physical').value ='';
//      goal keper
document.getElementById('diving').value ='';
document.getElementById('handling').value ='';
document.getElementById('kicking').value ='';
document.getElementById('reflexes').value ='';
document.getElementById('speed').value ='';
document.getElementById("positioning").value ='';
   
}
// localStorage.clear()

// add player to array => local storage function
addPlayerBtn.addEventListener('click', (event) => {
    event.preventDefault();

        if (formValidation()) {
            
            let playersData = JSON.parse(localStorage.getItem('player')) || [];
            const photoData = document.getElementById('photo').getAttribute('data-photo') || '';
            const flagData = document.getElementById('flag').getAttribute('data-photo') || '';
            const clubLogoData = document.getElementById('logo').getAttribute('data-photo') || '';
          
            if (selected.value == 'GK') {
                let player = {
                name: playerName.value,
                photo: photoData,
                position: selected.value,
                nationality: nationality.value,
                flag: flagData,
                club: clubName.value,
                clubLogo: clubLogoData,
                rating: rating.value,
                // goal keeper
                diving:diving.value,
                handling:handling.value,
                kicking:kicking.value,
                reflexes:reflexes.value,
                speed:speed.value,
                positioning:positioning.value,
                option: document.querySelector('input[name="option"]:checked')?.value || ''
            }
           
        // pushing player to array
        playersData.push(player);
        // saving data into local storage
        localStorage.setItem('player', JSON.stringify(playersData));
        
         addPlayerToField();// to update the field
        
         console.log(`Player "${player.name}" added successfully.`);
         // Reset the form fields
         reset();
        }
            else{
                 let player = {
                    name: playerName.value,
                    photo: photoData,
                    position: selected.value,
                    nationality: nationality.value,
                    flag: flagData,
                    club: clubName.value,
                    clubLogo: clubLogoData,
                    rating: rating.value,
                    // player
                    pace: pace.value,
                    shooting: shooting.value,
                    passing: passing.value,
                    dribbling: dribbling.value,
                    defending: defending.value,
                    physical: physical.value,
                    option: document.querySelector('input[name="option"]:checked')?.value || ''
//if the user didn't select option return '' not error            
            }
            // pushing player to array
            playersData.push(player);
            // saving data into local storage
            localStorage.setItem('player', JSON.stringify(playersData));
             // Reset the form fields
             addPlayerToField();
             reset();
             console.log(`Player "${player.name}" added successfully.`);
            } 
        }
})

// Call the function to add the players :refresh
addPlayerToField();


// function to add player to field
function addPlayerToField() {
    //cleaning each positions      
    const positions = ['gk', 'lb', 'rb', 'cbl', 'cbr', 'str', 'stl', 'rm', 'lm', 'cml', 'cmr'];
    positions.forEach((position) => {
        const positionElement = document.getElementById(position);
        if (positionElement) {
            positionElement.innerHTML = '';  
        }
    });

     //cleaning changement position
    let changementElement = document.getElementById('changementContainer')
    changementElement.innerHTML = '';
    
    // getting all players data from locaal storage    
    const allItemsArray = JSON.parse(localStorage.getItem('player')) || [];

    // looping through each player data and dplay it in the field
    allItemsArray.forEach((player) => {
        const position = player.position.toLowerCase();     
        const positionElement = document.getElementById(position);   

        if (positionElement) { 
              
            const playerCard = `
                <div class="cardContainer" >
                     <div class="playerInfos">
                        
                         <img src = "${player.photo}" id = "playerPhoto"/>
                       
                             <div class="numdiv">
                                 <div class="playercard-25-rating">${player.rating}</div>
                                 <div class="playercard-25-position">${player.position}</div>
                             </div>
                          
                             <div class="playerNme">
                                <p style="font-size: 10px; font-weight: 800;" class="player-NAme" id="playerName">${player.name}</p>
                             </div>
                             <div class="playerDetails">
                                
                                 <div class="prop1">
                                    
                                     <div class="ca" >${player.position == 'GK'? 'DIV' : 'PAC'}</div>
                                     <div class="ca" >
                                     ${player.position == 'GK'? player.diving : player.pace}
                                     </div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'HAN' : 'SHO'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.handling : player.shooting}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'kIC' : 'PAS'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.kicking : player.passing}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'REF' : 'DRI'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.reflexes : player.dribbling}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'SPE' : 'DEF'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.speed : player.defending}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'POS' :'PHY'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.positioning : player.physical}</div>
                                 </div>
                             </div>
                             <div class="CountryAndTeam">
                                 <div class="nationality">
                                 <img src="${player.flag}" class="flag-img" />                             
                                 </div>
                                 <div class="club" >
                                 <img src="${player.clubLogo}" class="club-logo-img" />
                                 </div>
                              
                            </div>
                    </div>
                    
                 </div>

            `;
 
//place of  changement or terain 
if (player.option === 'op1') {
    positionElement.innerHTML += playerCard;
} else if(player.option === 'op2'){
    changementElement.innerHTML += `
                <div class="cardContainerchangement" >
                     <div class="playerInfoschangement" traggable = "true">
                        
                         <img src = "${player.photo}" id = "playerPhotochangement"/>
                       
                             <div class="numdiv">
                                 <div class="playercard-25-rating">${player.rating}</div>
                                 <div class="playercard-25-position">${player.position}</div>
                             </div>
                          
                             <div class="playerNme">
                                <p style="font-size: 10px; font-weight: 800;" class="player-NAme" id="playerName">${player.name}</p>
                             </div>
                             <div class="playerDetails">
                                
                                 <div class="prop1">
                                    
                                     <div class="ca" >${player.position == 'GK'? 'DIV' : 'PAC'}</div>
                                     <div class="ca" >
                                     ${player.position == 'GK'? player.diving : player.pace}
                                     </div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'HAN' : 'SHO'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.handling : player.shooting}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'kIC' : 'PAS'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.kicking : player.passing}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'REF' : 'DRI'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.reflexes : player.dribbling}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'SPE' : 'DEF'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.speed : player.defending}</div>
                                 </div>

                                 <div class="prop1" >
                                     <div class="ca" >${player.position == 'GK'? 'POS' : 
                                     'PHY'}</div>
                                     <div class="ca" >${player.position == 'GK'? player.positioning : player.physical}</div>
                                 </div>
                             </div>
                             <div class="CountryAndTeam">
                                 <div class="nationality">
                                 <img src="${player.flag}" class="flag-img" />                             
                                 </div>
                                 <div class="club" >
                                 <img src="${player.clubLogo}" class="club-logo-img" />
                                 </div>
                              
                            </div>
                    </div>
                    
                 </div>

            `;
}else{
    positionElement.innerHTML += playerCard;
}
        }
    });
dragItem();
    
}

 //drag item function 
 function dragItem(){
    let drag = null;
    let items = document.querySelectorAll('.playerInfoschangement');
    items.forEach(item =>{
        item.addEventListener('dragstart', () => {
             drag = item; 
             item.style.opacity = '0.5'
        })
        item.addEventListener('dragend', () =>{
            drad = null;
             item.style.opacity = '1'
        })
        let cards = document.querySelectorAll('.card')
        cards.forEach(card =>{
            card.addEventListener('dragover', (e) => {
                e.preventDefault()
                card.style.transform = 'scale(1.1)';
                card.style.cursor = 'grabbing';
                card.style.filter = 'drop-Shadow(0px 0px 5px #ffb300)';
            })
            card.addEventListener('drop', () =>{
                card.append(drag)
               
    const playerName = drag.querySelector('#playerName').textContent;
    let playersData = JSON.parse(localStorage.getItem('player')) || [];

    
    const player = playersData.find(player => player.name === playerName);
    if (player) {
        player.option = 'op1'; 
        localStorage.setItem('player', JSON.stringify(playersData));
    }
               drag.style.width ='13rem'
              
               drag.style.height ='5rem'
               drag.style.position ='absolute'
               drag.style.top ='2rem';
               document.getElementById('playerPhotochangement').style.width = '60px';
               document.getElementById('playerPhotochangement').style.height = '60px'
               document.getElementById('playerPhotochangement').style.objectFit = 'fill';

               card.style.transform = 'scale(1)';
               card.style.cursor = 'grabbing';
            addPlayerToField();
              
            })
           
        })
    })
    
 }

// Function to get all plaeyers from localStorage as an array
function getAllLocalStorageItemsAsArray() {
    const itemsArray = [];
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        const value = localStorage.getItem(key);
        try {
            const parsedValue = JSON.parse(value);
            itemsArray.push({ key: key, value: parsedValue });
        } catch (e) {
            console.error("Error to parse json", e);
        }
    }
    return itemsArray;
}


// stoking images 
function loadFile(event) {
    const reader = new FileReader();
    reader.onload = function () {
        
        const inputId = event.target.id;
        let previewImg;

        if (inputId === "photo") {
            previewImg = document.getElementById("preview_img");   
        } else if (inputId === "flag") {
            previewImg = document.querySelector("img[src='https://i.pinimg.com/736x/5f/be/c6/5fbec6cfd1ff4f046e6d9de4e78ebc58.jpg']");   
        } else if (inputId === "logo") {
            previewImg = document.querySelector("img[src='https://i.pinimg.com/736x/59/54/29/5954296a5007cc5a0858de17ad8efbce.jpg']");   
        }
        if (previewImg) {
            previewImg.src = reader.result;
            event.target.setAttribute('data-photo', reader.result); 
        }
    };

    if (event.target.files[0]) {
        reader.readAsDataURL(event.target.files[0]);
    } else {
        console.error("No file selected.");
    }
}


    let popup = document.getElementById('popup-modal');
    popup.style.display ='none';

// DIPLAY POPUP MODAL
function displayPopup(){
    popup.style.display = 'block'
}


// delete player function
function deletePlayer(playerName) {
    let playersData = JSON.parse(localStorage.getItem('player')) || [];

    playersData = playersData.filter(player => player.name !== playerName);

    localStorage.setItem('player', JSON.stringify(playersData));

    addPlayerToField();

    console.log(`Player "${playerName}" deleted successfully.`);
}


// display popup modal
function displayPopup(playerName) {
    let popup = document.getElementById('popup-modal');
    popup.style.display = 'block'; 

    let nameOfPlayerToChange = document.getElementById('nameplayerChange');
    nameOfPlayerToChange.textContent = `do you want to edit or delete or see chimestiey of: ${playerName}?`;

    let editButton = document.getElementById('edit-btn');
    editButton.setAttribute('data-name', playerName);   

    let deleteButton = document.getElementById('delete-btn');
    deleteButton.onclick = function () {
        deletePlayer(playerName); 
        popup.style.display = 'none'; 
    };
}

// Hide Popup
function hidePopup() {
    let popup = document.getElementById('popup-modal');
    popup.style.display = 'none';
}

// card click event
document.addEventListener('click', (event) => {
    const clickedCard = event.target.closest('.cardContainer'); 
    if (clickedCard) {
        const playerName = clickedCard.querySelector('#playerName').textContent; 
        displayPopup(playerName); 
    }
});

// Close popup on close button click
document.getElementById('closeModal').addEventListener('click', hidePopup);


// edit function here
  document.getElementById('edit-btn').onclick = function() {
    const playerName = this.getAttribute('data-name'); 
    editPlayer(playerName);
    popup.style.display = 'none';
};



// edit player function
function editPlayer(playerName) {
    hidePopup();
    let playersData = JSON.parse(localStorage.getItem('player')) || [];
    const player = playersData.find(player => player.name === playerName);
    
    if (!player) {
        console.error('there is no player with this name');
        return;
    }

   
    if (player.position == 'GK') {
        document.getElementById('goolKeper-caracteristic').style.display = 'block';
        document.getElementById('player-caracteristic').style.display = 'none';

        // Fill in the goalkeeper fields
        document.getElementById('name').value = player.name || '';
        document.getElementById('position').value = player.position || '';
        document.getElementById('nationality').value = player.nationality || '';
        document.getElementById('club').value = player.club || '';
        document.getElementById('rating').value = player.rating || '';
        document.getElementById('diving').value = player.diving || '';
        document.getElementById('handling').value = player.handling || '';
        document.getElementById('kicking').value = player.kicking || '';
        document.getElementById('reflexes').value = player.reflexes || '';
        document.getElementById('speed').value = player.speed || '';
        document.getElementById('positioning').value = player.positioning || '';

    } else {
        document.getElementById('goolKeper-caracteristic').style.display = 'none';
        document.getElementById('player-caracteristic').style.display = 'block';

        // Fill in the player fields
        document.getElementById('name').value = player.name || '';
        document.getElementById('position').value = player.position || '';
        document.getElementById('nationality').value = player.nationality || '';
        document.getElementById('club').value = player.club || '';
        document.getElementById('rating').value = player.rating || '';
        document.getElementById('pace').value = player.pace || '';
        document.getElementById('shooting').value = player.shooting || '';
        document.getElementById('passing').value = player.passing || '';
        document.getElementById('dribbling').value = player.dribbling || '';
        document.getElementById('defending').value = player.defending || '';
        document.getElementById('physical').value = player.physical || '';

    }

    playersData = playersData.filter(p => p.name !== playerName);

    
    localStorage.setItem('player', JSON.stringify(playersData));

    addPlayerToField();

    console.log(`Player "${playerName}" deleted successfully.`);

   
    const saveButton = document.getElementById('addPlayerBtn');
    saveButton.onclick = function () {
    
        player.name = document.getElementById('name').value;
        player.position = document.getElementById('position').value;
        player.nationality = document.getElementById('nationality').value;
        player.club = document.getElementById('club').value;
        player.rating = document.getElementById('rating').value;

 
        if (player.position === 'GK') {
            player.diving = document.getElementById('diving').value;
            player.handling = document.getElementById('handling').value;
            player.kicking = document.getElementById('kicking').value;
            player.reflexes = document.getElementById('reflexes').value;
            player.speed = document.getElementById('speed').value;
            player.positioning = document.getElementById('positioning').value;
        }

        else {
            player.pace = document.getElementById('pace').value;
            player.shooting = document.getElementById('shooting').value;
            player.passing = document.getElementById('passing').value;
            player.dribbling = document.getElementById('dribbling').value;
            player.defending = document.getElementById('defending').value;
            player.physical = document.getElementById('physical').value;
        }

        playersData.push(player);

     
        localStorage.setItem('player', JSON.stringify(playersData));

      
        addPlayerToField();
        console.log(`Player "${playerName}" updated successfully.`);
    };
}




let chermestirybox = document.querySelector('.login-box') 
chermestirybox.style.display = 'none';
/*
let counter = 0
function filterPlayersByClubOrNationality() {
    chermestirybox.style.display = 'none';
   console.log("test")
  
playersData.forEach(ply =>{
    if (ply.club === document.getElementById('club').value || ply.nationality === document.getElementById){
        counter++
    }else{
        
    }
    
})
};

*/
