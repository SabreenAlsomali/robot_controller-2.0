<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Controller</title>
</head>
<body>
    <style>
        .button {
  background-color: #008CBA; /* Blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px;
  border-radius: 25px;
  border:2px #008CBA solid
}
 
 
			#output {
			    background-color:#F9F9F9;
			    padding:10px;
			    width: 100%;
			    margin-top:20px;
			    line-height:30px;
			}
			.hide {
			    display:none;
			}
			.show {
			    display:block;
			}
	 
 

    </style>
 
        <center>
            <a href="History.php" class="button" >History</a>
            <a href="index.php"  class="button">Movment</a>
            <a href="speech_to_text.php"  class="button">Speech to Text</a>
            <a href="Historyspeeches.php"  class="button">History Speech to Text</a>

        </center>
        <p><button type="button" onclick="runSpeechRecognition()">Speech to Text</button> &nbsp; <span id="action"></span></p>
        <div id="output" class="hide"></div>
        <form action="save_speech.php" method="post">
            <textarea name="speech" id="speech" cols="6" style="width: 100%;" rows="10">

            </textarea>
            <button type="submit">Save</button>
        </form>
		<script>
			/* JS comes here */
		    function runSpeechRecognition() {
		        // get output div reference
		        var output = document.getElementById("output");
		        // get action element reference
		        var action = document.getElementById("action");
                // new speech recognition object
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    action.innerHTML = "<small>listening, please speak...</small>";
                };
                
                recognition.onspeechend = function() {
                    action.innerHTML = "<small>stopped listening, hope you are done...</small>";
                    recognition.stop();
                }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    document.getElementById('speech').innerHTML=transcript;
                    output.innerHTML = "<b>Text:</b> " + transcript + "<br/> <b>Confidence:</b> " + confidence*100+"%";
                    output.classList.remove("hide");
                };
              
                 // start recognition
                 recognition.start();
	        }
		</script>
</body>
</html>