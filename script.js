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


let playersData = [];
addPlayerBtn.addEventListener('click', (event) => {
    event.preventDefault();
    
    if (selected.value == 'GK') {
        let player = {
        name: playerName.value,
        photo: photo.value,
        position: selected.value,
        nationality: nationality.value,
        flag: flag.value,
        club: clubName.value,
        clubLogo: clubLogo.value,
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
            photo: photo.value,
            position: selected.value,
            nationality: nationality.value,
            flag: flag.value,
            club: clubName.value,
            clubLogo: clubLogo.value,
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
    } 


    addPlayerToField();
})

function addPlayerToField(){
    let allItemsArray = getAllLocalStorageItemsAsArray()
    const gkPosition = document.getElementById('gk');
    const lbposition = document.querySelector('.lb');
    const rbposition = document.querySelector('.rb');
    const cblposition = document.querySelector('.cbl');
    const cbrposition = document.querySelector('.cbr');
    const strposition = document.querySelector('.str');
    const stlposition = document.querySelector('.stl');
    const rmposition = document.querySelector('.rm');
    const lmposition = document.querySelector('.lm');
    const cmlposition = document.querySelector('.cml');
    const cmrposition = document.querySelector('.cmr');

    gkPosition.innerHTML = '';
    lbposition.innerHTML = '';
    rbposition.innerHTML = '';
    cblposition.innerHTML = '';
    cbrposition.innerHTML = ''
    strposition.innerHTML = ''
    stlposition.innerHTML = ''
    rmposition.innerHTML = ''
    lmposition.innerHTML = ''
    cmlposition.innerHTML = ''
    cmrposition.innerHTML = '';
    allItemsArray = JSON.parse(localStorage.getItem('player')) || [];
allItemsArray.forEach((item) =>{
    // console.log(allItemsArray)
    const player = item;
    let playerPlace = `
             <div class="cardContainer" >
                    <div class="playerInfos" style ="overflow: hidden;">
                        
                        <img src = "${profilePictureData}" id = "playerPhoto"/>
                       
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
                                <div class="nationality"></div>
                                <div class="club" ></div>
                                <div class="logo"></div>
                            </div>
                    </div>
                </div>
    `
   
    

    ;

console.log(profilePictureData)
    switch (selected.value.toLowerCase()) {
        case 'gk':   gkPosition.innerHTML += playerPlace
          
            break;
        case 'lb' : lbposition.innerHTML += playerPlace
        break;

        case 'rb' : rbposition.innerHTML += playerPlace
        break;

        case 'cbl' : cblposition.innerHTML += playerPlace
        break;

        case 'cbr' : cbrposition.innerHTML += playerPlace
        break;

        case 'str' : strposition.innerHTML += playerPlace
        break; 
        
        case 'stl' : stlposition.innerHTML += playerPlace
        break;

        case 'rm' : rmposition.innerHTML += playerPlace
        break;

        case 'lm' : lmposition.innerHTML += playerPlace
        break;

        case 'cml' : cmlposition.innerHTML += playerPlace
        break;

        case 'cmr' : cmrposition.innerHTML += playerPlace
        break;
        default:
            alert('no position selected')
            break;
    }
})

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







let profilePictureData;

function loadFile(event) {
  const reader = new FileReader();
  
  reader.onload = function () {
    profilePictureData = reader.result;    
    document.getElementById("preview_img").src = profilePictureData;     
     
    const playerInfosDiv = document.getElementById('playerInfos');
    if (playerInfosDiv) {
      playerInfosDiv.style.backgroundImage = `url(${profilePictureData})`;   
      console.log("Background image set successfully.");
    } else {
      console.error("Element with id 'playerInfos' not found.");
    }
  };
  
  if (event.target.files[0]) {
    reader.readAsDataURL(event.target.files[0]);
  } else {
    console.error("No file selected.");
  }
}



// // form.addEventListener('keyup', (e) =>{
// //     e.preventDefault()
// // if (formValidation()) {
// //    alert("hello")
// // }
// // })


// // let inputs = form.querySelectorAll('.input'); 
// // inputs.forEach(input => { input.addEventListener('keyup', formValidation); });

// //phoyo 
// // var loadFile = function(event) {
            
// //     var input = event.target;
// //     var file = input.files[0];
// //     var type = file.type;

// //    var output = document.getElementById('preview_img');


// //     output.src = URL.createObjectURL(event.target.files[0]);
// //     output.onload = function() {
// //         URL.revokeObjectURL(output.src) // free memory
// //     }
// // };

// let loadfileFlag = function(e){
//     let input = e.target;
//     let file = input.files[0];
//     type =file.type;
//     let output = document.getElementById('flag-view');
//     output.src = URL.createObjectURL(e.target.files[0])
//     output.onload = function(){
//         URL.revokeObjectURL(output.src) // free memory
//     }
// }


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


    