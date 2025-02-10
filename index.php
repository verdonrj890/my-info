<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css?d=<?php echo time();?>">
</head>
<body>
    <div class='m-auto w-50 bg-light main_div'>
        <div class='row pb-4'>
            <div class='' style='align-content: end; width: 66%;'>
                <div>
                    <h1>
                        Ramon Joseph Verdon
                    </h1>
                    <h5 class='text-muted'>
                        ICT Staff | Developer | Faculty Instructor
                    </h5>
                </div>
                <div style='padding-left: 1.5rem;' class='icon_container'>
                    <a href="https://facebook.com/ramonjoseph.verdon.9/" target="_blank"><i class="fa-brands fa-facebook text-primary"></i></a>
                    <a href="#"><i class="fa-solid fa-square-phone text-secondary"></i></a>
                    <a href="https://www.linkedin.com/in/ramon-joseph-verdon-284449156/" target="_blank"><i class="fa-brands fa-linkedin text-info"></i></a>
                    <a href="mailto:ramonjoseph.verdon@fcpc-inc.com"><i class="fa-solid fa-envelope text-danger"></i></a>
                </div>
            </div>
            <div class="img_div" style='width: 33%;'></div>
        </div>

        <div>
            <div class='info_div'>
                <h3>Main Skill(s)</h3>
                <div class='d-flex justify-content-center'>
                    <div class="skill_div">Scripting</div>
                    <div class="skill_div">Technical Writing</div>
                    <div class="skill_div">Teaching</div>
                </div>
                <div class='d-flex justify-content-center'>
                    <div class="skill_div">Web Development</div>
                    <div class="skill_div">Software Development</div>
                </div>
            </div>
            <div class='info_div'>
                <h3>Coding Language(s)</h3>
                <div class='d-flex justify-content-center'>
                    <div class="skill_div">Java</div>
                    <div class="skill_div">Python</div>
                    <div class="skill_div">PHP</div>
                    <div class="skill_div">MySQL</div>
                    <div class="skill_div">MSSQL</div>
                </div>
                <div class='d-flex justify-content-center'>
                    <div class="skill_div">HTML</div>
                    <div class="skill_div">JavaScript</div>
                    <div class="skill_div">CSS</div>
                </div>
            </div>
            <div class='info_div'>
                <h3>Educational Background</h3>
                <table class='table table-bordered table-hover'>
                    <tr>
                        <td>
                            <b>First City Providential College, Inc. (FCPC) </b><br>
                            <i>Bachelor of Science in Information Technology (BSIT) - 2022</i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>First City Providential College, Inc. (FCPC) </b><br>
                            <i>Master of Information Technology (IT) - ongoing</i>
                        </td>
                    </tr>
                </table>

            </div>
            <div class='info_div'>
                <h3>Work Experience(s)</h3>
                <table class='table table-bordered table-hover'>
                    <tr>
                        <td>
                            <b>First City Providential College, Inc. (FCPC) </b><br>
                            <i>ICT Staff (Junior Web Developer) - ICT Department Development Team - up to date</i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>First City Providential College, Inc. (FCPC) </b><br>
                            <i>Part-time Faculty Instructor - College of Computer Studies - up to date</i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>First City Providential College, Inc. (FCPC) </b><br>
                            <i>Part-time Basic Education Instructor - Basic Education Department - 2022</i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Hytec Power, Inc.</b><br>
                            <i>Part-time Digital Marketing Staff - 2022</i>
                        </td>
                    </tr>
                </table>
            </div>
            <div class='info_div' hidden>projects list</div>
        </div>
    </div>
</body>
</html>

<script type="module">
  import Chatbox from 'https://cdn.jsdelivr.net/npm/@chaindesk/embeds@latest/dist/chatbox/index.js';

  const widget = await Chatbox.initBubble({
    agentId: 'cm4nvv6c60b9c62aeruoxv8n0',
    
    // optional 
    // If provided will create a contact for the user and link it to the conversation
    contact: {
      firstName: 'John',
      lastName: 'Doe',
      email: 'customer@email.com',
      phoneNumber: '+33612345644',
      userId: '42424242',
    },
    // optional
    // Override initial messages
    initialMessages: [
      'Hello Georges how are you doing today?',
      'How can I help you ?',
    ],
    // optional
    // Provided context will be appended to the Agent system prompt
    context: "The user you are talking to is John. Start by Greeting him by his name.",
  });

  // open the chat bubble
  widget.open();

  // close the chat bubble
  widget.close()

  // or 
  widget.toggle()
</script>