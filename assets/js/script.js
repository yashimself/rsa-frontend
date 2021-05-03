$(function() {   
    var name = $('#name');
    var cardNumber = $('#cardNumber');
    var cardNumberField = $('#card-number-field');
    var CVV = $("#cvv");
    var exp = document.getElementById("expiration-date");
    var expiry = exp.value;
    var mastercard = $("#mastercard");
    var confirmButton = $('#confirm-purchase');
    var visa = $("#visa");
    var amex = $("#amex");

    // Use the payform library to format and validate
    // the payment fields.

    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');


    cardNumber.keyup(function() {

        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');

        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }

        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
        }
    });

    confirmButton.click(function(e) {

        e.preventDefault();

        var isCardValid = $.payform.validateCardNumber(cardNumber.val());
        var isCvvValid = $.payform.validateCardCVC(CVV.val());

        if(name.val().length < 5){
            alert("Please check name field");
        } else if (!isCardValid) {
            alert("Incorrect card number");
        } else if (!isCvvValid) {
            alert("Incorrect CVV");
        } else {;
            document.getElementById("loading").style.display = "block";
            $.getJSON('https://api.jsonbin.io/b/608e73288a409667ca02f4cc', function(data) {
            
        var n = data.n
        
        var e2 = data.e
            
        var n_new = parseInt(n);
        var e_new = parseInt(e2);

        var card_details = name.val()+" "+cardNumber.val()+" "+CVV.val();
        var pt='';

        for ( var i=0; i<card_details.length; i++)
        {
            var t1 = card_details.charCodeAt(i)
            var t2 = BigNumber(t1).exponentiatedBy(e_new);
            var t3 = BigNumber(t2).modulo(n_new);
            var t4 = t3.valueOf();
            pt = pt.concat(t4);
        }

        //alert("n is",n_new," and e is: ",e_new," and cipher is: ");

        let req = new XMLHttpRequest();

        req.onreadystatechange = () => {
        if (req.readyState == XMLHttpRequest.DONE) {
           
            if(req.status == 200){
                document.getElementById("loading").style.display = "none";
                alert("You have successfully completed your transaction using RSA. Your data is stored in an encrypted format.");
                location.replace('/views/end.php');
            }
        }
        };
        
        req.open("POST", "https://api.jsonbin.io/v3/b", true);
        req.setRequestHeader("Content-Type", "application/json");
        req.setRequestHeader("X-Master-Key", "$2b$10$mo.oPUowtcSTd5tIo50d5u9xjNEP4ouyzgdYVb9as05Tyunpgj8Si");
        req.setRequestHeader("X-Bin-Name", name.val());
        req.send(
            '{"cipher":"' +pt.toString()+ '"}'
            );
        
    });

}
    });
});
