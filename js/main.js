$('.menu-hamburger').click(function() {
	$(".main-menu").animate({width:'toggle'}, 200, 'swing', function(){});
	$(".menu-cros").fadeIn(200);
	$(".opacity").fadeIn(100);
});
$('.menu-cros').click(hideStuff);
$('.main-menu a').click(function(){
	if ($('.menu-cros').is(":visible")) {
		hideStuff();
	}
});
$('.opacity').click(hideStuff);
$('.button-contact').click(function(event){
	event.preventDefault()

	$(this).toggleClass('open')
	var form = $('.form')
	if (form.is(":visible")) {
		form.slideUp()
	} else {
		form.slideDown()
	}
})
function hideStuff()
{
	$(".main-menu").animate({width:'toggle'}, 200, 'swing', function(){$(this).addClass('hidden'); $(this).removeAttr('style');} );
	$(".menu-cros").fadeOut(200);
	$(".opacity").fadeOut(100);
}
$('.contact-form').submit(function(event){
	event.preventDefault()


	var nameInput = $('.contact-form input[name="name"]')
	var emailInput = $('.contact-form input[name="email"]')
	var messageInput = $('.contact-form textarea[name="message"]')

	nameInput.siblings().remove()
	emailInput.siblings().remove()
	messageInput.siblings().remove()
	if (nameInput.val().length == 0 ) {
		nameInput.before('<label>Name can&#39;t be blank</label>')
	}
	if (emailInput.val().length == 0 ) {
		emailInput.before('<label>Email can&#39;t be blank</label>')
	}
	if (messageInput.val().length == 0 ) {
		messageInput.before('<label>Message can&#39;t be blank</label>')
	}

	if (nameInput.val().length == 0 || emailInput.val().length == 0 || messageInput.val().length == 0) {
		console.log('neco zustalo nevyplneno')
		return
	}


	$.ajax({
		method: $(this).attr('method'),
		url: $(this).attr('action'),
		data: $(this).serialize()
	})
		.done(function( msg ) {
			console.log(msg)
			$('.form').prepend('<p class="hlaska">Děkujeme za vaši zprávu. Co nejdříve se vám ozveme zpět.</p><a href="#" class="anotherQuestion dalsi-dotaz">Další dotaz</a>')
			$('.contact-form').slideUp()
		});

})

$(document).on('click', '.anotherQuestion', function(event){
	event.preventDefault()
	$(this).remove()
	$('.hlaska').remove()
	$('.contact-form')[0].reset();
	$('.contact-form').slideDown()
})


$(".scroll-to").click(function(e) {
	e.preventDefault();
	var fragment = $(this).attr("href")
	$('html, body').animate({
      	scrollTop: $($(this).attr("href")).offset().top
	}, 1000, function(){
		window.location.hash = fragment.slice(1)
	});
});