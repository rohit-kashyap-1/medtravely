<form>
            <div class="mb-4">
              <input type="text" name="name" class="form-control" placeholder="Patient Name">
            </div>
            <div class="mb-4">
              <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="mb-4">
              <select name="country" class="form-control form-select">
                <option value="">Select Country</option>
                <?php include('country-list.php'); ?>
              </select>
            </div>
            <div class="mb-4">
              <input type="text" name="city" class="form-control" placeholder="Enter City">
            </div>
            <div class="input-group mb-4">
              <span class="input-group-text" id="basic-addon1">+91</span>
              <input type="text" name="phone" class="form-control" placeholder="Enter Phone no." aria-label="Enter Phone no."
                aria-describedby="basic-addon1">
            </div>
            <div class="mb-4">
              <input type="text" name="dob" class="form-control" placeholder="DOB:YYYY/MM/DD">
            </div>
            <div class="mb-4">
              <textarea class="form-control" name="msg" placeholder="Describe the current medical Problem."></textarea>
            </div>
            <button class="btn btn-danger w-100">Contact Us Now</button>
            <div class="mt-4 text-center text-white">By submitting the form I agree to the <a href="" class="text-white fw-bold">Terms of Use</a> and <a class="text-white fw-bold">Privacy Policy</a> of MedTravely Health.</div>

          </form>