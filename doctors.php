<?php
include 'header.php';
?>
<section class="banner-section doctor-banner-section">
    <div class="breadcrumb-section">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="banner doctor-banner">
      <div class="container">
        <div class="seach">
          <h2 class="text-center mb-4 heading">Best Doctor in India</h2>
          <form class="inner-search-form">
  
            <div class="row">
              <div class="col pe-0">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                  </span>
                  <select class="form-control form-select heading" name="city">
                    <option value="">Select City</option>
                    <option value="New Delhi">New Delhi</option>
                  </select>
                </div>
              </div>
              <div class="col ps-0">
                <select class="form-control form-select heading" name="city">
                  <option value="">Select Department</option>
                </select>
              </div>
              <div class="col-md-3 ps-0">
                <button class="btn btn-danger btn-block w-100">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<section class="section">
    <div class="container">

        <div class="hospital-listing">
            <div class="hospital-list">
                <p class="heading mb-3">Searching for the best doctors in India? Explore the Doctors List in India with Vaidam Health: Trusted Experts Offering World-Class Care, Exceptional Reviews, and Unmatched Excellence. Consult now for Instant Help.</p>
                <?php include('doctor-list-item.php'); ?>
                <?php include('doctor-list-item.php'); ?>
                <?php include('doctor-list-item.php'); ?>
                <?php include('doctor-list-item.php'); ?>
                <?php include('doctor-list-item.php'); ?>
                <?php include('doctor-list-item.php'); ?>
                <div class="text-center">
                    <a href="" class="btn btn-lg btn-primary" style="font-size: 15px;">Show more Doctors...</a>
                </div>
            </div>
            <div class="hospital-sidebar">
                <div class="bg-primary p-4 rounded">
                    <h4 class="mb-0 text-white">Get FREE Evaluation</h4>
                    <span class="text-white d-block mb-2" style="font-size: 12px;">Treatment plan and quote within 2
                        days</span>
                    <?php 
                    include('sidebar-form.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section pt-0">
    <div class="container">
      <div class="hospital-x bg-light border rounded p-4 mb-4">
        <h4 class=" mb-3 heading">Top Doctors in India</h4>
        <ul>
          <li><a href="https://www.MedTravely.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity">Best Cardiac Surgeons in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/indraprastha-apollo-hospital-new-delhi"
              title="Indraprastha Apollo Hospital">Best Pediatric Cardiac Surgeons in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/fortis-escorts-heart-institute-new-delhi"
              title="Fortis Escorts Heart Institute">Best Kidney Specialists In India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/artemis-hospital-gurgaon" title="Artemis Hospital">Best Urologist in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/max-super-speciality-hospital-saket-new-delhi"
              title="Max Super Speciality Hospital">Max Super Speciality Hospital</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/fortis-memorial-research-institute-gurgaon"
              title="Fortis Memorial Research Institute">Fortis Memorial Research Institute</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/manipal-hospital-bangalore"
              title="Manipal Hospital (Old Airport Road)">Manipal Hospital (Old Airport Road)</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/apollo-hospitals-greams-road-chennai"
              title="Apollo Hospitals, Greams Road">Apollo Hospitals, Greams Road</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/kokilaben-dhirubhai-ambani-hospital-mumbai"
              title="Kokilaben Dhirubhai Ambani Hospital">Kokilaben Dhirubhai Ambani Hospital</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/apollo-hospitals-hyderabad"
              title="Apollo Hospitals, Jubilee Hills Hyderabad">Apollo Hospitals, Jubilee Hills Hyderabad</a></li>
        </ul>
      </div>
      <div class="hospital-x bg-light border rounded p-4 mb-4">
        <h4 class=" mb-3 heading">Top Doctors in India</h4>
        <ul>
          <li><a href="https://www.MedTravely.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity">Best Cardiac Surgeons in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/indraprastha-apollo-hospital-new-delhi"
              title="Indraprastha Apollo Hospital">Best Pediatric Cardiac Surgeons in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/fortis-escorts-heart-institute-new-delhi"
              title="Fortis Escorts Heart Institute">Best Kidney Specialists In India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/artemis-hospital-gurgaon" title="Artemis Hospital">Best Urologist in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/max-super-speciality-hospital-saket-new-delhi"
              title="Max Super Speciality Hospital">Max Super Speciality Hospital</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/fortis-memorial-research-institute-gurgaon"
              title="Fortis Memorial Research Institute">Fortis Memorial Research Institute</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/manipal-hospital-bangalore"
              title="Manipal Hospital (Old Airport Road)">Manipal Hospital (Old Airport Road)</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/apollo-hospitals-greams-road-chennai"
              title="Apollo Hospitals, Greams Road">Apollo Hospitals, Greams Road</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/kokilaben-dhirubhai-ambani-hospital-mumbai"
              title="Kokilaben Dhirubhai Ambani Hospital">Kokilaben Dhirubhai Ambani Hospital</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/apollo-hospitals-hyderabad"
              title="Apollo Hospitals, Jubilee Hills Hyderabad">Apollo Hospitals, Jubilee Hills Hyderabad</a></li>
        </ul>
      </div>
      <div class="hospital-x bg-light border rounded p-4 mb-4">
        <h4 class=" mb-3 heading">Top Doctors in India</h4>
        <ul>
          <li><a href="https://www.MedTravely.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity">Best Cardiac Surgeons in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/indraprastha-apollo-hospital-new-delhi"
              title="Indraprastha Apollo Hospital">Best Pediatric Cardiac Surgeons in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/fortis-escorts-heart-institute-new-delhi"
              title="Fortis Escorts Heart Institute">Best Kidney Specialists In India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/artemis-hospital-gurgaon" title="Artemis Hospital">Best Urologist in India</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/max-super-speciality-hospital-saket-new-delhi"
              title="Max Super Speciality Hospital">Max Super Speciality Hospital</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/fortis-memorial-research-institute-gurgaon"
              title="Fortis Memorial Research Institute">Fortis Memorial Research Institute</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/manipal-hospital-bangalore"
              title="Manipal Hospital (Old Airport Road)">Manipal Hospital (Old Airport Road)</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/apollo-hospitals-greams-road-chennai"
              title="Apollo Hospitals, Greams Road">Apollo Hospitals, Greams Road</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/kokilaben-dhirubhai-ambani-hospital-mumbai"
              title="Kokilaben Dhirubhai Ambani Hospital">Kokilaben Dhirubhai Ambani Hospital</a></li>
          <li><a href="https://www.MedTravely.com/hospitals/apollo-hospitals-hyderabad"
              title="Apollo Hospitals, Jubilee Hills Hyderabad">Apollo Hospitals, Jubilee Hills Hyderabad</a></li>
        </ul>
      </div>
    </div>
  </section>
<section class="section bg-light">
    <div class="container">
        <h4 class="mb-4 heading">Frequently Asked Questions (FAQ’s)</h4>
        <?php
        include('faqs.php');
        ?>
    </div>
</section>
<?php
include 'footer.php';
?>