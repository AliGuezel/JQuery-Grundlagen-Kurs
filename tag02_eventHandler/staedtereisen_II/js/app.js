

var stadt = ['Berlin', 'Bremen', 'Köln', 'Leipzig', 'Dresden'];
var link  = ['berlin', 'bremen', 'koeln', 'leipzig', 'dresden'];

$('.thumbs img').on('mouseenter', function(){
    
    var nummerDesElements = $('.thumbs img').index(this);

    $('#info').html(stadt[nummerDesElements]);
    $('#gross').attr('src', 'img/galerie/gross/'+(nummerDesElements+1)+'.jpg');
    $('#link').attr('href', 'https://www.'+link[nummerDesElements]+'.de');
    $('#info').css({marginLeft:(nummerDesElements*20)+'px'});

});

