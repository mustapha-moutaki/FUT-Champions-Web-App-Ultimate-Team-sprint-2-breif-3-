//bottons
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





//functions
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

let playersData = [];

if (localStorage.player != null) {
    playersData = JSON.parse(localStorage.player);
} else {
    playersData = [];
}
// localStorage.clear()
addPlayerBtn.addEventListener('click', (event) => {
    event.preventDefault();
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
    }
// pushing player to array
playersData.push(player);
// saving data into local storage
localStorage.setItem('player', JSON.stringify(playersData));
// console.log(playersData)
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
    }
    // pushing player to array
    playersData.push(player);
    // saving data into local storage
    localStorage.setItem('player', JSON.stringify(playersData));
    console.log(playersData)

    addPlayerToField();

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


   
})


function addPlayerToField() {
    //cleaning the positions container        
    const positions = ['gk', 'lb', 'rb', 'cbl', 'cbr', 'str', 'stl', 'rm', 'lm', 'cml', 'cmr'];
    positions.forEach((position) => {
        const positionElement = document.getElementById(position);
        if (positionElement) {
            positionElement.innerHTML = '';  
        }
    });

        
    const allItemsArray = JSON.parse(localStorage.getItem('player')) || [];

    
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
            positionElement.innerHTML += playerCard;  
        }
    });
}


// Function to get all tasks from localStorage as an array
function getAllLocalStorageItemsAsArray() {
    const itemsArray = [];
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        const value = localStorage.getItem(key);
        try {
            const parsedValue = JSON.parse(value);
            itemsArray.push({ key: key, value: parsedValue });
        } catch (e) {
            console.error("Error parsing JSON:", e);
        }
    }
    return itemsArray;
}


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


//form validation
function formValidation(){
        // let form = document.getElementById('playerForm');
        let inputsErrors = form.querySelectorAll('.error');

        inputsErrors.forEach((err) => (err.textContent = ''));
        inputsErrors.forEach((err) => (err.style.color = 'red'));
        inputsErrors.forEach((err) => (err.style.fontStyle = 'italic'));

        let isValid = true;

        // name validation
        // let nameRegex = /^[a-zA-Z]+ \s[a-zA-Z]+(\s[a-zA-Z]+)?$/
        let nameRegex = /^[a-zA-Z]+$/
        if(playerName.value.trim() == ''){
            document.getElementById('nameError').textContent = "name is required ";
            isValid = false
        }else if(!nameRegex.test(playerName.value)){
            document.getElementById('nameError').textContent = "Please enter the complete name.";
        }

        //player photo validation
        let imageValue = document.getElementById('photo')
        if(imageValue.files.length == 0){
            document.getElementById('photoError').textContent = "Please select a photo.";
        }
        //flag photo validation
        let flagImageValue = document.getElementById('flag')
        if(flagImageValue.files.length == 0){
            document.getElementById('flagError').textContent = "Please select a photo.";
        }

        //club photo validation
        let clubImageValue = document.getElementById('photo')
        if(clubImageValue.files.length == 0){
            document.getElementById('clubError').textContent = "Please select a photo.";
        }

        //club validation
        clubRegex = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/
        if(clubName.value.trim() == ''){
            document.getElementById('clubError').textContent = "Club name is required ";
            isValid = false;
        }else if(clubRegex.test(clubName.value)){
            document.getElementById('clubError').textContent = "Please enter the complete club name.";
            isValid = flase
        }


        if(+rating < 10 || +rating > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
        if(+pace < 10 || +pace > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
        if(+shooting < 10 || +shooting > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
        if(+passing < 10 || +passing > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
        if(+dribbling < 10 || +dribbling > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
        if(+defending < 10 || +defending > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
        if(+physical < 10 || +physical > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }
            //goal kiper
            
         if(+diving < 10 || +diving > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }if(+handling < 10 || +handling > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }if(+kicking < 10 || +kicking > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }if(+reflexes < 10 || +reflexes > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }if(+speed < 10 || +speed > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }if(+positioning < 10 || +positioning > 100){
            document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100";
        }

        return isValid;
    }


        let popup = document.getElementById('popup-modal');
    popup.style.display ='none';

   
function displayPopup(){
    popup.style.display = 'block'
}
// Delete function
function deletePlayer(playerName) {
    const playersData = JSON.parse(localStorage.getItem('player')) || [];
    const updatedPlayers = playersData.filter(player => player.name !== playerName); // Remove the player by name
    localStorage.setItem('player', JSON.stringify(updatedPlayers)); // Save updated list to localStorage
    addPlayerToField();
     
}

// Display Popup
function displayPopup(playerName) {
    let popup = document.getElementById('popup-modal');
    popup.style.display = 'block'; // Show the popup
    let nameOfPlayerToChange = document.getElementById('nameplayerChange');
    nameOfPlayerToChange.textContent = `Do you want to delete the player: ${playerName}?`;

  
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

// Attach event listener to each card
document.addEventListener('click', (event) => {
    const clickedCard = event.target.closest('.cardContainer'); 
    if (clickedCard) {
        const playerName = clickedCard.querySelector('#playerName').textContent; 
        displayPopup(playerName); 
    }
});

// Close popup on close button click
document.getElementById('closeModal').addEventListener('click', hidePopup);

