const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

const sname = document.getElementById('sname')
const spassword = document.getElementById('spassword')
const sform = document.getElementById('sform')
const form2 = document.getElementById('form2')



form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }

  if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})

form2.addEventListener('submit', (e) => {
  let messages = []
  if (sname.value === '' || sname.value == null) {
    alert('Name is required')
  }
  if (sname.value.length <=3) {
    alert('Name is to short')
  }

  if (spassword.value.length <= 6) {
    alert('Password must be longer than 6 characters')
  }

  if (spassword.value.length >= 20) {
    alert('Password must be less than 20 characters')
  }

  if (spassword.value === 'password') {
    alert('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})


// function validate (number){
//     var emaili=document.getElementById("email").value;
//     var name=document.getElementById("name").value;
   
//      

//     if(email ==0){
//         if(name[0],value ==""){
//             alert("Please fill out your username!");
//         }
//         else if (name[1].value ==""){
//             alert("please fill out your password");
//         }else{
//             alert("Login succesfull");
//         }
//     }
//     else if (number == 1){
//         if(emaili ==''){
//             alert("email can not be blank!")
//         }
//         else if (!emal.test(emaili)){
//             alert("email is invalid!");
//         }
//         else if(name[4].value == ''){
//             alert("please fill your username")
//         }
//         else if(name[5].value == ""){
//             alert("please fill your password")
//         }
//         else{
//             alert("register succesfull!")
//         }
//     }
// }
