<?php
/**
 * Template Name: About
 * The template for the About Us Page
 */

get_header();
?>
<div class="modal" id="TeachingThingsContactForm">
  <div class="modal-background noFormForYou"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title headline">Contact Teaching Things</p>
      <button class="delete noFormForYou" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "182596",
	formId: "967406bb-de21-48bb-829a-7b29c5cea658"
});
</script>
    </section>
  </div>
</div>


  <main id="main-content" role="main">
		<div class="container is-fluid">
    	<div class="container padding-top padding-bottom">
        <div class="columns is-centered">
          <div class="column is-5">
            <h1 class="headline sub-header">Vision</h1>
            <p>Our vision is to provide innovative professional learning experiences that improve pedagogical practice, enhance engagement, and boost achievement for the whole learning community. </p>
            <h2 class="margin-top headline small-header">About</h2>
            <p>Teaching Things is the instructional backbone of <a href="https://www.teq.com"><u>Tequipment, Inc.</u></a> It is an MWBE company comprised of education professionals dedicated to teaching and instruction. We meet the needs of educators through meaningful learning experiences that fuse pedagogy with technology integration. Teaching Things comprises OTIS for Educators, our online learning platform; Onsite PD, our customizable professional learning experiences; and iBlocks, project-based curricula for the 21st century classroom. Always at the forefront of the changing landscape of education, we go above and beyond to create and deliver content that inspires every corner of the educational environment. </p>
            <h5 class="margin-top margin-bottom"><button class="button-pill green" onclick="modal_visibility('TeachingThingsContactForm');">Contact Us</button></h5>
          </div>
          <div class="column is-6 is-offset-1">
            <h1 class="headline sub-header">Meet the Team</h1>
            <p>The Teaching Things team is comprised of state-certified teachers, all with years of classroom experience. Team members are SMART Certified Trainers, Google Certified Educators, and each have their own area of expertise including English, math, science, social studies, STEM, ENL, special education, computer science, and more.</p>

            <h2 class="margin-top headline small-header">Leadership</h2>
            <div class="columns is-multiline">
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/DawnCastillo.png" alt="Dawn Castillo">
                    </figure>
                    <div class="media-content">
                      <p class="title">Dawn Castillo</p>
                      <p class="subtitle">President</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/Robert-WayneHarris.png" alt="Robert-Wayne Harris">
                    </figure>
                    <div class="media-content">
                      <p class="title">Robert-Wayne Harris</p>
                      <p class="subtitle">Chief Learning Officer</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/ChrissyRebert.png" alt="Chrissy Rebert ">
                    </figure>
                    <div class="media-content">
                      <p class="title">Chrissy Rebert </p>
                      <p class="subtitle">VP of Global Instructional Solutions</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/JosephSanfilippo.png" alt="Joseph Sanfilippo ">
                    </figure>
                    <div class="media-content">
                      <p class="title">Joseph Sanfilippo </p>
                      <p class="subtitle">Director of eLearning</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/MichelleHollander.png" alt="Joseph Sanfilippo ">
                    </figure>
                    <div class="media-content">
                      <p class="title">Michelle Hollander </p>
                      <p class="subtitle">Director of Content and Curriculum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h2 class="margin-top headline small-header">Educators</h2>
            <div class="columns is-multiline" id="educatorList">
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/RobertAbraham.png" alt="Robert Abraham">
                    </figure>
                    <div class="media-content">
                      <p class="title">Robert Abraham</p>
                      <p class="subtitle">PD Specialist/PD Account Manager</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('RobertAbraham');" id="RobertAbraham">More Info</button>
                    <div class="hidden-content">
                      <p>Permanent Certifications: Elementary K-5<br />Specialty areas: elementary school, Hebrew schools, special needs schools</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/BenjaminCebulash.png" alt="Ben Cebulash">
                    </figure>
                    <div class="media-content">
                      <p class="title">Ben Cebulash</p>
                      <p class="subtitle">PD Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('BenCebulash');" id="BenCebulash">More Info</button>
                    <div class="hidden-content">
                      <p>Standard Certification: Elementary Education; Teacher of English 6-12<br />Specialty areas: middle school/high school ELA</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/CherylCrawford.png" alt="Cheryl Crawford">
                    </figure>
                    <div class="media-content">
                      <p class="title">Cheryl Crawford</p>
                      <p class="subtitle">Curriculum Specialist</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/GregDaSilva.png" alt="Greg DaSilva">
                    </figure>
                    <div class="media-content">
                      <p class="title">Greg DaSilva</p>
                      <p class="subtitle">PD Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('GregDaSilva');" id="GregDaSilva">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: TEFL Certification <br />Specialty areas: bilingual education, Spanish, ENL/EFL</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/EmmaFoley.png" alt="Emma Foley">
                    </figure>
                    <div class="media-content">
                      <p class="title">Emma Foley</p>
                      <p class="subtitle">Curriculum Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('EmmaFoley');" id="EmmaFoley">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: Childhood Education 1-6, Special Education 1-6<br />Specialty areas: elementary education, special education, curriculum development and teacher mentoring</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/AdamFragale.png" alt="Adam Fragale">
                    </figure>
                    <div class="media-content">
                      <p class="title">Adam Fragale</p>
                      <p class="subtitle">Curriculum Specialist</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/DiomedesGonzalez.png" alt="Diomedes Gonzalez">
                    </figure>
                    <div class="media-content">
                      <p class="title">Diomedes Gonzalez</p>
                      <p class="subtitle">Curriculum Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('DiomedesGonzalez');" id="DiomedesGonzalez">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: Elementary Education<br />Specialty areas: bilingual education, Spanish, science</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/CaylieGaccione.png" alt="Caylie Lehrer">
                    </figure>
                    <div class="media-content">
                      <p class="title">Caylie Lehrer</p>
                      <p class="subtitle">Curriculum Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('CaylieLehrer');" id="CaylieLehrer">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: Early Childhood Education B-2; Childhood Education 1-6; Special Education 1-6; Annotation in Severe and Multiple Disabilities<br />Specialty areas: elementary education/special education, dance/arts, ELA, STEAM</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/NicoleMathew.png" alt="Nicole Mathew">
                    </figure>
                    <div class="media-content">
                      <p class="title">Nicole Mathew</p>
                      <p class="subtitle">Curriculum Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('NicoleMathew');" id="NicoleMathew">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: 7-12 Biology<br />Specialty areas: environmental science, STEM/STEAM, secondary science</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/MatthewThaxter.png" alt="MatthewThaxter">
                    </figure>
                    <div class="media-content">
                      <p class="title">Matthew Thaxter</p>
                      <p class="subtitle">PD Specialist/PD Account Manager</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('MatthewThaxter');" id="MatthewThaxter">More Info</button>
                    <div class="hidden-content">
                      <p>Permanent Certifications: Elementary N-6; Social Studies, Grades 7-12<br />Specialty Areas: social studies, STEM/STEAM</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/PatriciaUmhafer.png" alt="PatriciaUmhafer">
                    </figure>
                    <div class="media-content">
                      <p class="title">Patricia Umhafer</p>
                      <p class="subtitle">PD Strategist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('PatriciaUmhafer');" id="PatriciaUmhafer">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: CDA Early Childhood Education<br />Specialty areas: early education admin, child development, early education curriculum development and teacher coaching, early education classroom design, performing arts</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-full">
                <div class="card educator">
                  <div class="card-content">
                    <figure class="image is-48x48">
                      <img src="https://www.teq.com/images/headshots_circles/TerryVanNoy.png" alt="PatriciaUmhafer">
                    </figure>
                    <div class="media-content">
                      <p class="title">Terry VanNoy</p>
                      <p class="subtitle">PP Specialist</p>
                    </div>
                    <button class="button is-rounded is-small" onclick="toggle_visibility('TerryVanNoy');" id="TerryVanNoy">More Info</button>
                    <div class="hidden-content">
                      <p>Certification areas: Secondary Education 7-12 English and Math<br />Specialty areas: WA state certificate; eligible to teach all (K-12), computer science, STEM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    	</div>
		</div>
    <div class="build-learn-deliver">
      <img class="page-bottom left" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_remotelearningathome.png'; ?>" />
      <img class="page-bottom right" src="<?php echo get_template_directory_uri() . '/inc/images/teachingthings_literacybookspace.png'; ?>" />
      <div class="container">
        <div class="columns is-centered padding-top padding-bottom">
          <div class="column is-10">
            <h3 class="headline green-text has-text-centered">Transforming teaching and learning through ingenious real-world experiences that prepare today’s students for tomorrow’s world.</h3>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
