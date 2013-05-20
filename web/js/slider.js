 var tpj=jQuery;               // MAKE JQUERY PLUGIN CONFLICTFREE
tpj.noConflict();
        
tpj(document).ready(function() 
{
        
    if (tpj.fn.cssOriginal!=undefined)   // CHECK IF fn.css already extended
    tpj.fn.css = tpj.fn.cssOriginal;

    var api = tpj('.banner').revolution(
        {    
            delay:9000,                                                
            startheight:200,
            startwidth:1345,
            
            hideThumbs:200,
            
            thumbWidth:100,                            
            thumbHeight:50,
            thumbAmount:5,
            
           navigationType:"bullet",               
           navigationArrows:"nexttobullets",
           navigationStyle:"round",
                                        
           navigationHAlign:"center",             
           navigationVAlign:"bottom",                 
           navigationHOffset:0,
           navigationVOffset:20,
            
           soloArrowLeftHalign:"left",
           soloArrowLeftValign:"center",
           soloArrowLeftHOffset:20,
           soloArrowLeftVOffset:0,
            
           soloArrowRightHalign:"right",
           soloArrowRightValign:"center",
           soloArrowRightHOffset:20,
           soloArrowRightVOffset:0,
            touchenabled:"on",                      
            onHoverStop:"on",                        
            
            navOffsetHorizontal:0,
            navOffsetVertical:20,
            
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            hideSliderAtLimit:0,
            
            stopAtSlide:-1,
            stopAfterLoops:-1,
            
            shadow:1,
            fullWidth:"off"    
                                        
        });    

    api.bind("revolution.slide.onloaded", function()
    {
        jQuery(".banner ul li").attr("style", "left: " + jQuery(".banner").position().left + ";" + " visibility: visible; top: 0px; z-index: 20; opacity: 1;");
    });
        
});  