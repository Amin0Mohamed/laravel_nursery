//declative varible
let age = document.getElementById("birth_date");
   let name = document.getElementById("name");
let fname = document.getElementById("fname");
let mname = document.getElementById("mname");
  let name1 = document.getElementById("name1");
  let name2 = document.getElementById("name2");
  let email = document.getElementById('email');
  let pass =  document.getElementById('pass');
  let phone = document.getElementById('phone');
    let phone1= document.getElementById('phone1');
    let phone2 = document.getElementById('phone2');



function reg_name() {
    let pat_name = /^[a-zA-Z ]+$/;
    // let pat_name = /^[A-Z][a-zA-Z]+\s[a-zA-Z]+$/;
    let n =name.value;
    if(n.match(pat_name)){
         name.style.borderBottom= "2px solid #0f0";
        document.getElementById("mes_name").innerHTML="";
    }else{
       name.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_name").innerHTML=" only char ";
    }
}
/**********************************************************/
function reg_age() {
    let pat_phone = /^[1-9]{1}$|^100$/;
    let p =age.value;
    if (p <= 2){
        if(p.match(pat_phone)){
            age.style.borderBottom = "2px solid #0f0";
            document.getElementById("mes_age").innerHTML="";
        }else{
            age.style.borderBottom = "2px solid #f00";
            document.getElementById("mes_age").innerHTML="only one number not start with 0";
        }
    }else {
        age.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_age").innerHTML="value should be less than 2";
    }
}

function reg_fname() {
    let pat_name = /^[a-zA-Z ]+$/;
    // let pat_name = /^[A-Z][a-zA-Z]+\s[A-Z]+$/;
    let n =fname.value;
    if(n.match(pat_name)){
        fname.style.borderBottom= "2px solid #0f0";
        document.getElementById("mes_fname").innerHTML="";
    }else{
        fname.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_fname").innerHTML="only char";
    }
}
function reg_mname() {

    let pat_name = /^[a-zA-Z ]+$/;
    let n =mname.value;
    if(n.match(pat_name)){
        mname.style.borderBottom= "2px solid #0f0";
        document.getElementById("mes_mname").innerHTML="";
    }else{
        mname.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_mname").innerHTML="only char";
    }
}
function reg_fwork_name() {

    let pat_name = /^[a-z]+$/;
    let n =name1.value;
    if(n.match(pat_name)){
        name1.style.borderBottom= "2px solid #0f0";
        document.getElementById("mes_work_name1").innerHTML="";
    }else{
        name1.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_work_name1").style.color='#f00';
        document.getElementById("mes_work_name1").innerHTML=" only small char ";
    }
}
function reg_mwork_name() {

    let pat_name = /^[a-z]+$/;
    let n =name2.value;
    if(n.match(pat_name)){
        name2.style.borderBottom= "2px solid #0f0";
        document.getElementById("mes_work_name2").innerHTML="";
    }else{
        name2.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_work_name2").style.color='#f00';
        document.getElementById("mes_work_name2").innerHTML=" only small char ";
    }
}
function reg_ph1() {
    let pat_phone = /^\d+$/;
    let p =phone1.value;
    if(p.match(pat_phone)){
        phone1.style.borderBottom = "2px solid #0f0";
        document.getElementById("mes_phone1").innerHTML="";
    }else{
        phone1.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_phone1").innerHTML="only number";
    }
}
function reg_ph2() {
    let pat_phone = /^\d+$/;
    let p =phone2.value;
    if(p.match(pat_phone)){
        phone2.style.borderBottom = "2px solid #0f0";
        document.getElementById("mes_phone2").innerHTML="";
    }else{
        phone2.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_phone2").innerHTML="only number";
    }
}
/***********************************************************************/
function reg_pass() {

    let pat_pass = /^\d{8,20}$/;
    let p = pass.value;
    if(p.match(pat_pass)){
        pass.style.borderBottom ="2px solid #0f0";
         document.getElementById("mes_pass").innerHTML="";
    }else{
        pass.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_pass").innerHTML="your password should between 8 and 20 number";
    }
}
function reg_mail() {

    let pat_mail = /^\w+@[A-Za-z]+?\.[A-Za-z]{2,3}$/;
    let e = email.value;
    if(e.match(pat_mail)){
        email.style.borderBottom = "2px solid #0f0";
         document.getElementById("mes_mail").innerHTML="";
    }else{
       email.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_mail").innerHTML="you should enter \"@ \" and \". \" and any two or three char ";
    }
}
function reg_phone() {

    let pat_phone = /^01\d{9}$/;
    let p =phone.value;
    if(p.match(pat_phone)){
        phone.style.borderBottom = "2px solid #0f0";
         document.getElementById("mes_phone").innerHTML="";
    }else{
        phone.style.borderBottom = "2px solid #f00";
        document.getElementById("mes_phone").innerHTML="ytour phone should start with 01 and all number equal 11";
    }
}
