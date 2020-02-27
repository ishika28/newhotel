/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

equalheight = function(container)	{

	var currentTallest = 0,
    currentRowStart = 0,
    rowDivs = new Array(),
    $el,
    topPosition = 0;
	
	$(container).each(function()	{
		$el = $(this);
		$($el).height('auto')
		topPostion = $el.position().top;

		if	(currentRowStart != topPostion) {
			for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
			rowDivs.length = 0; // empty the array
			currentRowStart = topPostion;
			currentTallest = $el.height();
			rowDivs.push($el);
		}	else	{
				rowDivs.push($el);
				currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		}
		for (currentDiv = 0 ; curœ3ì|÷÷"Ó{{–)w¿ş=Á×Ü'áv“JWtÿ¦~ÿU[şıŸôN©w÷>YtMßô7ÚqÕ2ıÒùiYÅ1‡‹Š{:ƒòÎÑŸM…~|B6xı‘¤Ñ#ˆúûïCWäH·îR:SmÚ’Ş¾ÿ`{—5<œVÉ÷ø÷2w{@öâ¿¶:»iÀ»áûİùÏœm;ıà­õ’¾ıÖõp¥VIÍÏ›1ŸTÊ“¼_gQµ¹îJH)?™yCŞúÙI	;•:ÏÎÚ¿sæÁÑA›œ@?£§|U‹;²_"×ÿòsöıóP×sccS´Á)‘gRĞCÒA¢¸_ËTõ©™õßòÓ2tOtc´TÊª?>lj9Ê«Ô>§Iy“íÖøŞ¤¾pìÅËìgÇ½ñ¾” ¾ÎDÉïãÉä