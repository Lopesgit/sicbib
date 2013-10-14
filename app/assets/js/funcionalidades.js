$(document).ready( function () {
    $('#tb_func').dataTable(); 
    
    $('#tb_func tbody tr').live('click', function () {
					var sTitle;
					var nTds = $('td', this);
					var sBrowser = $(nTds[1]).text();
					var sGrade = $(nTds[4]).text();
					
					if ( sGrade == "A" )
						sTitle =  sBrowser+' will provide a first class (A) level of CSS support.';
					else if ( sGrade == "C" )
						sTitle = sBrowser+' will provide a core (C) level of CSS support.';
					else if ( sGrade == "X" )
						sTitle = sBrowser+' does not provide CSS support or has a broken implementation. Block CSS.';
					else
						sTitle = sBrowser+' will provide an undefined level of CSS support.';
					
					alert( sTitle )
				} );
} );