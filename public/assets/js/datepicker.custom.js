"use strict";!function(e){e("#minMaxExample").datepicker({language:"en",minDate:new Date});var a=[0,6];e("#disabled-days").datepicker({language:"en",onRenderCell:function(e,n){if("day"==n){var i=e.getDay();return{disabled:-1!=a.indexOf(i)}}}})}(jQuery);