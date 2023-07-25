
//name = 'alamin';
//var name = 'alamin';
let name = 'alamin';
const id = 12;
let student = ['12', 34, 3.4];
// function abc(){

// }
//let f1 = (a, b)=>a+b;

console.log('test');
function test(){
    alert('test');
}

// document.write('<h1>Another test</h1>');
// document.getElementsByTagName('h1')[0].innerHTML = 'Only JS test';
// document.getElementsByTagName('h1')[1].style.color = 'red';
// document.getElementById('h1')[0];

function checkUser(){
    let username = document.getElementById('username').value;
    //alert(username);
    document.getElementById('abc').innerHTML = username;
}


function ajax(){
    //alert('test');
    let username = document.getElementById('username').value;
    let xhttp = new XMLHttpRequest();
    //xhttp.open('GET', 'abc.php?username='+username, true);
    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('username='+username);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('abc').innerHTML = this.responseText;
        }
    }
}