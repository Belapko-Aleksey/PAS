function CreatePay(form)
{
    let amount = document.getElementById("amount").value;
    let email = document.getElementById("inputEmail").value;
    let system = "qiwi";
    amount = 220;
    email = "chervyak375@gmail.com";
    location =  '//pay/' + system + '/' + email + '/' + amount;
}