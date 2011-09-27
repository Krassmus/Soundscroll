SR = {
	lists: [],
	isPlaying: false,
	activateLetter: function (letter) {
		jQuery(".letter").removeClass("clicked");
		jQuery("#letter_" + letter).addClass("clicked");
		var player = $("#musicplayer audio")[0];
		if (jQuery("#current_letter").val() !== letter || !player.src) {
			jQuery.ajax({
				url: "playlist.php",
				data: {
					'letter': letter
				},
				dataType: "json",
				success: function (json) {
					SR.lists[letter] = json.list;
					SR.nextTrack(letter);
					$("#musicplayer .category_header").fadeOut(2000, function () {
						$("#musicplayer .category_header").text(json.title).fadeIn(2000);
					});
					if (json.picture !== $("#musicplayer img.infopicture").attr('src')) {
						$("#musicplayer img.infopicture").fadeOut(2000, function () {
							$("#musicplayer img.infopicture").attr('src', json.picture).fadeIn(2000);
						});
					}
				}
			});
			jQuery("#current_letter").val(letter);
		} else {
			if (SR.isPlaying) {
				player.pause();
				SR.isPlaying = false;
			} else {
				player.play();
				SR.isPlaying = true;
			}
		}
	},
	nextTrack: function (letter) {
		if (!letter) {
			letter = jQuery("#current_letter").val();
			if (!letter) {
				return;
			}
		}
		var player = $("#musicplayer audio")[0];
        var next = 0;
        for(var i = 0; i < SR.lists[letter].length; i++) {
            var adress = decodeURIComponent(player.src);
            if (adress.indexOf(SR.lists[letter][i]) !== -1) {
                next = (i + 1) % SR.lists[letter].length;
                break;
            }
        }
		if (SR.lists[letter][next]) {
			player.src = SR.lists[letter][next];
			player.play();
			$("#musicplayer .filename").fadeOut(2000, function () {
				$("#musicplayer .filename")
					.attr('href', SR.lists[letter][next])
					.text(SR.lists[letter][next].substr(SR.lists[letter][next].lastIndexOf("/") + 1).replace(/\.ogg/, ""))
					.fadeIn(2000);
			});
			SR.isPlaying = true;
		} else {
			$("#musicplayer .category_header").text("");
			$("#musicplayer .filename").attr('href', "").text("");
			player.src = null;
			SR.isPlaying = false;
		}
    },
};

jQuery(function () {
	jQuery("#current_letter").val('');
	jQuery(".letter").bind("click", function () {
		var letter = jQuery.trim(jQuery(this).text());
		SR.activateLetter(letter);
	});
	jQuery(window.document).bind("keyup", function (event) {
		if (event.ctrlKey) {
			return;
		}
		if (event.keyCode === 39) {
			SR.nextTrack();
		}
		var keycodes = {65:'a',66:'b',67:'c',68:'d',69:'e',70:'f',71:'g',72:'h',73:'i',74:'j',75:'k',76:'l',77:'m',78:'n',79:'o',80:'p',81:'q',82:'r',83:'s',84:'t',85:'u',86:'v',87:'w',88:'x',89:'y',90:'z'};
		var letter = keycodes[event.keyCode];
		if (letter) { 
			SR.activateLetter(keycodes[event.keyCode]);
		}
	});
	jQuery("#musicplayer audio").bind("ended", function () { SR.nextTrack(null) });
});