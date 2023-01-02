// preloader
$(window).on("load", function () {
	$(".preloader").fadeOut(1000);
});
/**
 * Scrolls to an element with header offset
 */
const scrollto = (el) => {
	let elementPos = select(el).offsetTop;
	window.scrollTo({
		top: elementPos,
		behavior: "smooth",
	});
};
