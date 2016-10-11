$(function() {
	var jCrop_api_headline;
	$("#resHeadline").hide();
	$("#btnModalUploadImage").click(function() {
		$("#modalFormUploadImage").modal('show');
	});
	$('#formUploadImage').submit(function() {
		var formData = new FormData( $("#formUploadImage")[0]);
		if(jCrop_api_headline === undefined) {
			$('#imgRealHeadline').Jcrop({}, function() {
				jCrop_api_headline = this;
			});
		}
		$.ajax({
			url : base_url + 'backend/upload/imageHeadline',  // Controller URL
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
            	var res = JSON.parse(data);
            	console.log(res);
                if (typeof res.error !== 'undefined') {
                	$("#noticeErrorUpload").show();
                	$("#noticeErrorUpload").html(res.error);
                }
                else {
                	$("#noticeErrorUpload").hide();

                	$("#imageHeadlineName").val(res.img_name);
                	$("#srcImageHeadline").val(res.img_src);


                	$("#resHeadline").show();
                	$('#resHeadline #imgRealHeadline').remove();
					$('#resHeadline').prepend('<img id="imgRealHeadline" class="img-responsive" src="'+base_url+res.img_src+'?'+Math.random()+'" />');


                	$("#btnCropHeadline").show();

                	jCrop_api_headline.destroy();

                	$('#imgRealHeadline').Jcrop({
						onSelect:    updateCoordsHeadline,
						bgColor:     'black',
						bgOpacity:   .4,
						setSelect:   [ 970, 400, 0, 30 ],
						aspectRatio: 970 / 400
					}, function () {
						jCrop_api_headline = this;
					});
                }
            }
		})
		.done(function() {
			clearconsole();
		});
		return false;
	});

	// Croping headline
	$("#btnCropHeadline").click(function() {
		$.ajax({
			type: "POST",
			url: base_url+"backend/upload/cropHeadline",
			data: {
				x:$("#x").val(),
				y:$("#y").val(),
				w:$("#w").val(),
				h:$("#h").val(),
				img_src:$("#srcImageHeadline").val(),
				img_name:$("#imageHeadlineName").val()
			},
			cache: false,
			success: function(data) {
				$("#lastHeadline").attr('src', base_url+data+"?"+Math.random());
				alert("Has been croped with successfull");
			}
		})
		.done(function() {
			clearconsole();
		});
	});

	var jCrop_api_thumbnail;
	$("#resThumbnail").hide();
	$("#btnModalUploadImageThumbnail").click(function() {
		$("#modalFormUploadImageThumbnail").modal('show');
	});

	// take from headline
	if(jCrop_api_thumbnail === undefined) {
		$('#imgRealThumbnail').Jcrop({}, function() {
			jCrop_api_thumbnail = this;
		});
	}

	$("#takeFromHeadline").click(function() {
		if($("#srcImageHeadline").val() != "") {

			$("#imageThumbnail").val($("#imageHeadlineName").val());
        	$("#srcImageThumbnail").val($("#srcImageHeadline").val());

			$("#resThumbnail").show();
			$('#resThumbnail #imgRealThumbnail').remove();
			$('#resThumbnail').prepend('<img id="imgRealThumbnail" class="img-responsive" src="'+base_url+$("#srcImageHeadline").val()+'?'+Math.random()+'" />');

			$("#btnCropThumbnail").show();

        	jCrop_api_thumbnail.destroy();

			$('#imgRealThumbnail').Jcrop({
				onSelect:    updateCoordsThumbnail,
				bgColor:     'black',
				bgOpacity:   .4,
				setSelect:   [ 300, 200, 0, 30 ],
				aspectRatio: 300 / 200
			}, function () {
				jCrop_api_thumbnail = this;
			});
		}
		else {
			alert("No image found in Headline");
		}
	});

	$('#formUploadImageThumbnail').submit(function() {
		var formData = new FormData( $("#formUploadImageThumbnail")[0]);
		$.ajax({
			url : base_url + 'backend/upload/imageHeadline',  // Controller URL
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
            	var res = JSON.parse(data);
                if (typeof res.error !== 'undefined') {
                	$("#noticeErrorUploadThumbnail").show();
                	$("#noticeErrorUploadThumbnail").html(res.error);
                }
                else {
                	$("#noticeErrorUpload").hide();

                	$("#imageThumbnail").val(res.img_name);
                	$("#srcImageThumbnail").val(res.img_src);


                	$("#resThumbnail").show();
                	$('#resThumbnail #imgRealThumbnail').remove();
					$('#resThumbnail').prepend('<img id="imgRealThumbnail" class="img-responsive" src="'+base_url+res.img_src+'?'+Math.random()+'" />');


                	$("#btnCropThumbnail").show();

                	jCrop_api_thumbnail.destroy();

                	$('#imgRealThumbnail').Jcrop({
						onSelect:    updateCoordsThumbnail,
						bgColor:     'black',
						bgOpacity:   .4,
						setSelect:   [ 300, 200, 0, 30 ],
						aspectRatio: 300 / 200
					}, function () {
						jCrop_api_thumbnail = this;
					});
                }
            }
		})
		.done(function() {
			// clearconsole();
		});
		return false;
	});

	// Croping headline
	$("#btnCropThumbnail").click(function() {
		$.ajax({
			type: "POST",
			url: base_url+"backend/upload/cropThumbnail",
			data: {
				x:$("#x-thumbnail").val(),
				y:$("#y-thumbnail").val(),
				w:$("#w-thumbnail").val(),
				h:$("#h-thumbnail").val(),
				img_src:$("#srcImageThumbnail").val(),
				img_name:$("#imageThumbnail").val()
			},
			cache: false,
			success: function(data) {
				// alert(data);
				$("#lastThumbnail").attr('src', base_url+data+"?"+Math.random());
				alert("Has been croped with successfull");
			}
		})
		.done(function() {
			clearconsole();
		});
	});

	/**
    * Status
    */
    $("#status1").click(function() {
    	$("#status1").removeClass("btn-default");
    	$("#status1").addClass("btn-primary");
    	
    	$("#status2").removeClass("btn-primary");
    	$("#status2").addClass("btn-default");
    });
    $("#status2").click(function() {
    	$("#status2").removeClass("btn-default");
    	$("#status2").addClass("btn-primary");
    	
    	$("#status1").removeClass("btn-primary");
    	$("#status1").addClass("btn-default");
    });

    /**
     * Tag
     */
    $('#tag').magicSuggest({
		data 			: base_url + 'backend/tag_list',
		valueField		: 'tag_id',
		displayField	: 'tag_name'

    });

});

function updateCoordsHeadline(c)
{
	$('#x').val(c.x);
	$('#y').val(c.y);
	$('#w').val(c.w);
	$('#h').val(c.h);
};

function updateCoordsThumbnail(c)
{
	$('#x-thumbnail').val(c.x);
	$('#y-thumbnail').val(c.y);
	$('#w-thumbnail').val(c.w);
	$('#h-thumbnail').val(c.h);
};


function clearconsole() { 
  console.log(window.console);
  if(window.console || window.console.firebug) {
   console.clear();
  }
}