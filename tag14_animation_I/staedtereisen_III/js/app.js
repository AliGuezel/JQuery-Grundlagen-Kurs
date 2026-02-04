
var stadt = ['Berlin', 'Bremen', 'Köln', 'Leipzig', 'Dresden'];
var link  = ['berlin', 'bremen', 'koeln', 'leipzig', 'dresden'];

$('.thumbs img').on('mouseenter', function(){
    
    var nummerDesElements = $('.thumbs img').index(this);

    $('#info').html(stadt[nummerDesElements]);
    $('#gross').attr('src', 'img/galerie/gross/'+(nummerDesElements+1)+'.jpg');
    $('#link').attr('href', 'https://www.'+link[nummerDesElements]+'.de');
    $('#info').css({marginLeft:(nummerDesElements*20)+'px'});

    $(this).css({border:'1px solid #999', width:'95px', height:'52px'});
    $(this).animate({opacity:1}, 250);

});

$('.thumbs img').on('mouseleave', function(){
    $(this).css({border:'0px solid #999', width:'97px', height:'54px'});
    $(this).animate({opacity:0.75}, 250);
});

