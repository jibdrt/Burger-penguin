document.getElementById('submit').addEventListener('click', function(event){
    let password = document.getElementById('input-password').value;
    let confirmation = document.getElementById('input-confirmation').value;
    console.log(password);
    console.log(confirmation);
    if (password !== confirmation) {
        document.getElementById('error').innerHTML = 'les mots de passe ne correspondent pas';
        document.getElementById('error').style.color = 'red';
        document.getElementById('submit').style.display ='none';
        event.preventDefault();
    } else {

    }
})

