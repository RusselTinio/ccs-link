
<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('style/survey_form.css')?>">
  
	<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/linearicons.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/font-awesome.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/bootstrap.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/magnific-popup.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/nice-select.css') ?>">                  
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/animate.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/main.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/swiper-bundle.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/style/style/profilePage/css/swiper.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/profilePage/css/profile-css.css') ?>">
<link rel="stylesheet" href="<?= base_url('style/modal.css') ?>">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css' integrity='sha512-KOWhIs2d8WrPgR4lTaFgxI35LLOp5PRki/DxQvb7mlP29YZ5iJ5v8tiLWF7JLk5nDBlgPP1gHzw96cZ77oD7zQ==' crossorigin='anonymous'/>

</head>
  
  <body>
  <header id="header" id="home">
			<div class="container">
				<?= $this->include('navbar') ?>    
			</div>
		</header>
    <section>

   <section class="section-gap">
   <div class="label-title">
      <h1 id="title">College of Computing Studies Alumni Employability</h1>
      <p id="description">Survey Form for the Alumni</p>
    </div>
   </section>
    

    <div class="main-wrapper">
        <div class="form-wrapper">
          <form action="#" method="POST">
            <div class="input-group">
                <label for="email" class="form-label"> Email </label>
                <input type="email" id="email" placeholder="Enter your email" class="form-input"/>
              </div>
              <div class="input-group">
                <label for="name" class="form-label"> Name </label>
                <input type="text" name="name" id="name" placeholder="Enter your name" class="form-input"/>
              </div>

              <div class="input-group">
                <label class="form-label">
                  Gender
                </label>
                <select class="form-select" name="occupation" id="occupation">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            
            <div class="input-group">
              <label for="year_graduated" class="form-label"> Year Graduated </label>
              <input type="text" id="year_graduated" placeholder="Enter year" class="form-input"/>
            </div>

            <div class="mb-5">
              <label for="qusOne" class="form-label">
                Course
              </label>
              <div class="radio-flex">
                <div class="radio-group">
                  <label class="radio-label">
                    <input class="input-radio" type="radio" name="qusOne" id="qusOne"/>
                      Bachelor of Science in Information Technology
                    <span class="radio-checkmark"></span>
                  </label>
                </div>
                <div class="radio-group">
                  <label class="radio-label">
                    <input class="input-radio" type="radio" name="qusOne" id="qusOne"/>
                      Bachelor of Science in Computer Science
                    <span class="radio-checkmark"></span>
                  </label>
                </div>
                <div class="radio-group">
                  <label class="radio-label">
                    <input class="input-radio" type="radio" name="qusOne" id="qusOne"/>
                     Bachelor of Science in Information System
                    <span class="radio-checkmark"></span>
                  </label>
                </div>
                <div class="radio-group">
                  <label class="radio-label">
                    <input class="input-radio" type="radio" name="qusOne" id="qusOne"/>
                     Associate in Computer Technology
                    <span class="radio-checkmark"></span>
                  </label>
                </div>
              </div>
            </div>

            <div class="input-group">
              <label class="form-label">
                Status
              </label>
              <select class="form-select" name="occupation"  id="status" onchange="toggleAdditionalQuestions()">
                <option value="#">*</option>
                <option value="employed">Employed</option>
                <option value="unemployed">Unemployed</option>
                <option value="self-employed">Self-employed</option>
              </select>
            </div>

            <div id="additionalQuestions" class="additional-questions">
            <div class="input-group">
              <label for="company_name" class="form-label"> Name of Company / Type of Business </label>
              <label class="label-ex">(Example: Jose B. Lingad General Hospital, City of San Fernando) </label>
              <input type="text" name="company_name" id="company_name" placeholder="Enter name of company" class="form-input"/>
            </div>
            
            <div class="input-group">
              <label class="form-label">
                Sector
              </label>
              <select class="form-select" name="occupation" id="occupation">
                <option value="#">*</option>
                <option value="public">Public sector</option>
                <option value="private">Private sector</option>
              </select>
            </div>

            <div class="input-group">
              <label class="form-label">
                International / Local Company
              </label>
              <select class="form-select" name="occupation" id="occupation">
                <option value="#">*</option>
                <option value="public">International</option>
                <option value="private">Local</option>
              </select>
            </div>

            <div class="input-group">
              <label for="position" class="form-label">  Position of Work </label>
              <label class="label-ex">(Example: Junior QA Engineer, Instructor 1) </label>
              <input type="text" name="position" id="position" placeholder="Enter position" class="form-input"/>
            </div>

            <div class="input-group">
              <label for="p_language" class="form-label">  What is the commonly used programming language in your company/environment? </label>
              <input type="text" name="p_language" id="p_language" placeholder="Enter programming language" class="form-input"/>
            </div>
          </div>
            <br>
            <label for="position" class="label-text">  DATA PRIVACY STATEMENT </label>
              <label class="form-label">
                Rest assured that all information provided herein will be treated with utmost confidentiality and protected under the DATA PRIVACY ACT OF 2012.
                Your agreement to be part of this study is considered a formal consent as you submit your response in this survey.
            </label>

            <label for="" class="checkbox">
              <input type="checkbox" name="prefer" class="checkbox" value="agree"> I agree
            </label> 
              <br>
              <br>

            <div>
              <label for="message" class="form-label">
                Give us your feedback
              </label>
              <textarea rows="6" name="message" id="message" placeholder="Type here..." class="form-input-feedback"></textarea>
            </div>
           
            <button  type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </section>
        </div>
      </div>
      <script>
        function toggleAdditionalQuestions() {
          const status = document.getElementById('status').value;
          const additionalQuestions = document.getElementById('additionalQuestions');
    
          if (status === 'employed' ) {
            additionalQuestions.classList.add('show-additional');
          } 
          else if (status === 'self-employed' ) {
            additionalQuestions.classList.add('show-additional');
          } 
          else {
            additionalQuestions.classList.remove('show-additional');
          }
         
        }
      </script>
    </body>

</html>
