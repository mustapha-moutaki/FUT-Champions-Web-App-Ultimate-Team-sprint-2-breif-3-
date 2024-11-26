
// let selected = document.getElementById('position')

// let addPlayerBtn = document.getElementById('submitbtn')


// selected.addEventListener('change', () =>{
//     // console.log(selected.value)
//     if(selected.value === 'gk'){
//         document.getElementById('goolKeper-caracteristic').style.display = 'block';
//         document.getElementById('player-caracteristic').style.display = 'none';

//     }else{
//         document.getElementById('goolKeper-caracteristic').style.display = 'none';
//         document.getElementById('player-caracteristic').style.display = 'block';
//     }
// })


document.addEventListener("DOMContentLoaded", function() {
    let selected = document.getElementById('position');
    let addPlayerBtn = document.getElementById('submitbtn');

    selected.addEventListener('change', () => {
        if (selected.value === 'GK') {
            document.getElementById('goolKeper-caracteristic').style.display = 'block';
            document.getElementById('player-caracteristic').style.display = 'none';
        } else {
            document.getElementById('goolKeper-caracteristic').style.display = 'none';
            document.getElementById('player-caracteristic').style.display = 'block';
        }
    });
});