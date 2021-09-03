import $ from "jquery";

class Search {
	constructor() {
		this.openButton = $(".js-search-trigger");
		this.closeButton = $(".search-overlay__close");
		this.searchOverlay = $(".search-overlay");
		this.searchTerm = $("#search-term");
		this.resultsDiv = $("#search-overlay__results");
		this.events();
		// session to check the status of overlay
		this.isOverlay = false;
		this.typingTimer;
	}

	events() {
		this.openButton.on("click", this.openOverlay.bind(this));
		this.closeButton.on("click", this.closeOverlay.bind(this));
		$(document).on("keydown", this.keyPressSearch.bind(this));
		this.searchTerm.on("keydown", this.typingLogic.bind(this));
	}

	// Methods

	typingLogic() {
		clearTimeout(this.typingTimer); // clearing timeout until 2000ms
		this.typingTimer = setTimeout(function () {
			console.log("test");
		}, 2000);
	}

	// trigger the keybinding for search and close the orverlay
	keyPressSearch(e) {
		if (e.keyCode == 83 && this.isOverlay == false) {
			this.openOverlay();
		}
		if (e.keyCode == 27 && this.isOverlay == true) {
			this.closeOverlay();
		}
	}

	openOverlay() {
		this.searchOverlay.addClass("search-overlay--active");
		$("body").addClass("body-no-scroll");
		//adding overlay session opened
		this.isOverlay = true;
	}

	closeOverlay() {
		this.searchOverlay.removeClass("search-overlay--active");
		$("body").removeClass("body-no-scroll");
		this.isOverlay = false;
	}
}

export default Search;
