
    var w=0,h=0;
    var a4w=595, a4h= 842;
    $(document).ready(function(){
        $("#btn-upload").click(function(){
            $("#file-input").click();
        })

        $("#file-input").change(function(){
            prepareimage(this);
        })

        function prepareimage(input){
            if (input.files && input.files[0]) {
                $("#orginal-image").show();
                $("#classified-image").hide();
                var reader = new FileReader();
                reader.onload = function (e) {
                    $img = $("#orginal-image").find("img");
                    $img.attr('src',e.target.result);

                    var base64 = e.target.result;
                    var arr = base64.split("base64,");
                    var base64 = arr[1];
                    $img.on('load',function(){
                        w = $img.prop('naturalWidth');
                        h = $img.prop('naturalHeight');
                    })

                    convertimagetotext(base64);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function convertimagetotext(base64){
            var url = "vission-image-to-text.php";
            $.ajax({
                url: url,
                type: 'POST',
                data: {base64 : base64},
                dataType: 'json',
                beforeSend: function() {
                	$("#canvas").html("");
                	$("#canvas").show();
                	$("#output-box").html("");
                	$("#classified-image-canvas").html("");
                    $("#no-image").hide();
                    $("#output-box").hide();
                    $("#loading").show();
                },
                success: function (resp) {
                    processingocr(resp.data);
                    $("#output-box").show();
                    $("#no-image").show();
                    
                    $("#loading").hide();
                    
                },
                error: function (x,t,e) {
                    console.log(x);
                }
            });
        }


        function processingocr(resp)
        {
            var content = resp;
  
  // Split the string into an array based on '\n'
  var lines = content.split('\n');
  
  // Create an empty string to store the HTML code
  var html = '';
  
  // Iterate over each line and construct the HTML code
  $.each(lines, function(index, line) {
    html += line + '<br>';
  });
  
            $("#no-image").html(html);
            $("#classified-image").show();

        }
    })