@extends('front.layouts.app')
@section('section')
<section class="service">
    <div class="banner " data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-12 col-12">
              @if (str_replace('-',' ',Request::segment(2))=="trademark registration")
                  <div class="banner_text_section">
                   <h3 class="color_white" data-aos="fade-up"  data-aos-delay="400"> 
                     <b>Protect Your Brand</b>
                   </h3>
                   <p class="color_white" data-aos="fade-up"  data-aos-delay="400">Your business needs trademarks to identify its products or services, for brand loyalty and identity, and to distinguish it from competitors. A registered trademark will not only protect your name and logo from others using them inappropriately but also help you stand out from the crowd.</p>
                   <!-- <div class="button">
                     <a href="#we_deliver" class="btn btn_yellow_">Let’s Get Started</a>
                   </div> -->
                 </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="private limited company")
                 <div class="banner_text_section">
                    <h3 class="color_white" data-aos="fade-up"  data-aos-delay="400"> 
                      <b>Take the first step to creating your own brand and business</b>
                    </h3>
                    <p class="color_white" data-aos="fade-up"  data-aos-delay="400">Setting up a private limited company is one of the quickest ways to start a business in India. With a little bit of paperwork and some patience, you can be on your way to your new business venture.</p>
                    <!-- <div class="button">
                      <a href="#we_deliver" class="btn btn_yellow_">Let’s Get Started</a>
                    </div> -->
                 </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="proprietorship firm")
                   <div class="banner_text_section">
                    <h3 class="color_white" data-aos="fade-up"  data-aos-delay="400"> 
                      <b>Get a Proprietorship Firm Registered Instantly</b>
                    </h3>
                    <p class="color_white" data-aos="fade-up"  data-aos-delay="400">Finpro facilitates registration of proprietorship Firm in India through local license or registration, as well as tax registration. A proprietorship firm is the simplest form of business registration where the responsibility of operation and running the business lies solely with the owner.</p>
                    <!-- <div class="button">
                      <a href="#we_deliver" class="btn btn_yellow_">Let’s Get Started</a>
                    </div> -->
                 </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="limited liability partnership")
                   <div class="banner_text_section">
                    <h3 class="color_white" data-aos="fade-up"  data-aos-delay="400"> 
                      <b>Get your LLP Registered @ ₹ 3999/-s</b>
                    </h3>
                    <p class="color_white" data-aos="fade-up"  data-aos-delay="400">You may be a sole proprietor, a partnership, or a company. But one thing is for sure, you want your business to be recognized in the market and create an impact by introducing it to as many people as possible. At Finpro, this becomes a reality by helping you get your limited liability partnership registered at just ₹ 3999/-*</p>
                    <!-- <div class="button">
                      <a href="#we_deliver" class="btn btn_yellow_">Let’s Get Started</a>
                    </div> -->
                 </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="GST return filing")
                   <div class="banner_text_section">
                    <h3 class="color_white" data-aos="fade-up"  data-aos-delay="400"> 
                      <b>All-in-one GST filing package</b>
                    </h3>
                    <p class="color_white" data-aos="fade-up"  data-aos-delay="400">Our GST filing package will make GST returns filing easy as pie. We’ll process all your monthly GST return so you can focus on growing your business.</p>
                    <!-- <div class="button">
                      <a href="#we_deliver" class="btn btn_yellow_">Let’s Get Started</a>
                    </div> -->
                 </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="accounting bookkeeping")
                <div class="banner_text_section">
                    <h3 class="color_white" data-aos="fade-up"  data-aos-delay="400"> 
                      <b>Your virtual accounting expert</b>
                    </h3>
                    <p class="color_white" data-aos="fade-up"  data-aos-delay="400">Ensure your business is performing at its optimum level by partnering with our virtual accounting services. Finpro provides you with a full range of virtual accounting services to ensure that your business remains streamlined and profitable. By ensuring that your accounts are up-to-date and errors reduced, we help you keep on top of your finances while providing additional benefits like improved cash flow and profitability.</p>
                    <!-- <div class="button">
                      <a href="#we_deliver" class="btn btn_yellow_">Let’s Get Started</a>
                    </div> -->
                 </div>
              @endif
               
              </div>
              <div class="col-lg-6 col-md-12 col-12">
  
                <form class="banner_form bg_white" data-aos="zoom-out" data-aos-delay="200" method="POST" action="{{ route('service.enquiry') }}" id="enquiry-form">
                    @if(str_replace('-',' ',Request::segment(2))=="accounting bookkeeping")
                     <h3>Accounting / Bookkeeping</h3>
                    @else
                     <h3>{{ str_replace('-',' ',Request::segment(2)) }}</h3>
                    @endif
                 <span id="msg"></span>
                 <div class="row_flx">
                  <div class="w_100">
                    <input type="hidden" name="service" value="{{str_replace('-',' ',Request::segment(2)) }}">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>
                  <div class="w_100">
                    <input type="text" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" placeholder="Email" required >
                  </div>
                  <div class="w_100">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact Number"  data-inputmask='"mask": "+91 (999) 999-9999"' data-inputmask-clearincomplete="true" data-mask required>
                  </div>
                  <div class="w_100">
                    <input type="text" class="form-control" id="organization" name="organization" placeholder="Organization Name" required>
                  </div>
                  
                  <div class="w_100">
                    <select class="form-control" id="country-state" name="country-state" required>
                        <option value="Select your state"  selected> Select your state</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                          <option value="AP">Andhra Pradesh</option>
                          <option value="AR">Arunachal Pradesh</option>
                          <option value="AS">Assam</option>
                          <option value="BR">Bihar</option>
                          <option value="CH">Chandigarh</option>
                          <option value="CT">Chhattisgarh</option>
                          <option value="DN">Dadra and Nagar Haveli</option>
                          <option value="DD">Daman and Diu</option>
                          <option value="DL">Delhi</option>
                          <option value="GA">Goa</option>
                          <option value="GJ">Gujarat</option>
                          <option value="HR">Haryana</option>
                          <option value="HP">Himachal Pradesh</option>
                          <option value="JK">Jammu and Kashmir</option>
                          <option value="JH">Jharkhand</option>
                          <option value="KA">Karnataka</option>
                          <option value="KL">Kerala</option>
                          <option value="LA">Ladakh</option>
                          <option value="LD">Lakshadweep</option>
                          <option value="MP">Madhya Pradesh</option>
                          <option value="MH">Maharashtra</option>
                          <option value="MN">Manipur</option>
                          <option value="ML">Meghalaya</option>
                          <option value="MZ">Mizoram</option>
                          <option value="NL">Nagaland</option>
                          <option value="OR">Odisha</option>
                          <option value="PY">Puducherry</option>
                          <option value="PB">Punjab</option>
                          <option value="RJ">Rajasthan</option>
                          <option value="SK">Sikkim</option>
                          <option value="TN">Tamil Nadu</option>
                          <option value="TG">Telangana</option>
                          <option value="TR">Tripura</option>
                          <option value="UP">Uttar Pradesh</option>
                          <option value="UT">Uttarakhand</option>
                          <option value="WB">West Bengal</option>
                        </select>
                  </div>
                  
                  <div class="w_100">
                   <select class="form-control" id="city" required name="city">
                       <option value="Select City"  selected> Select City</option>
                       <option value="Adilabad">Adilabad</option>
                        <option value="Agra">Agra</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Ahmednagar">Ahmednagar</option>
                        <option value="Aizawl">Aizawl</option>
                        <option value="Ajitgarh (Mohali)">Ajitgarh (Mohali)</option>
                        <option value="Ajmer">Ajmer</option>
                        <option value="Akola">Akola</option>
                        <option value="Alappuzha">Alappuzha</option>
                        <option value="Aligarh">Aligarh</option>
                        <option value="Alirajpur">Alirajpur</option>
                        <option value="Allahabad">Allahabad</option>
                        <option value="Almora">Almora</option>
                        <option value="Alwar">Alwar</option>
                        <option value="Ambala">Ambala</option>
                        <option value="Ambedkar Nagar">Ambedkar Nagar</option>
                        <option value="Amravati">Amravati</option>
                        <option value="Amreli district">Amreli district</option>
                        <option value="Amritsar">Amritsar</option>
                        <option value="Anand">Anand</option>
                        <option value="Anantapur">Anantapur</option>
                        <option value="Anantnag">Anantnag</option>
                        <option value="Angul">Angul</option>
                        <option value="Anjaw">Anjaw</option>
                        <option value="Anuppur">Anuppur</option>
                        <option value="Araria">Araria</option>
                        <option value="Ariyalur">Ariyalur</option>
                        <option value="Arwal">Arwal</option>
                        <option value="Ashok Nagar">Ashok Nagar</option>
                        <option value="Auraiya">Auraiya</option>
                        <option value="Aurangabad">Aurangabad</option>
                        <option value="Aurangabad">Aurangabad</option>
                        <option value="Azamgarh">Azamgarh</option>
                        <option value="Badgam">Badgam</option>
                        <option value="Bagalkot">Bagalkot</option>
                        <option value="Bageshwar">Bageshwar</option>
                        <option value="Bagpat">Bagpat</option>
                        <option value="Bahraich">Bahraich</option>
                        <option value="Baksa">Baksa</option>
                        <option value="Balaghat">Balaghat</option>
                        <option value="Balangir">Balangir</option>
                        <option value="Balasore">Balasore</option>
                        <option value="Ballia">Ballia</option>
                        <option value="Balrampur">Balrampur</option>
                        <option value="Banaskantha">Banaskantha</option>
                        <option value="Banda">Banda</option>
                        <option value="Bandipora">Bandipora</option>
                        <option value="Bangalore Rural">Bangalore Rural</option>
                        <option value="Bangalore Urban">Bangalore Urban</option>
                        <option value="Banka">Banka</option>
                        <option value="Bankura">Bankura</option>
                        <option value="Banswara">Banswara</option>
                        <option value="Barabanki">Barabanki</option>
                        <option value="Baramulla">Baramulla</option>
                        <option value="Baran">Baran</option>
                        <option value="Bardhaman">Bardhaman</option>
                        <option value="Bareilly">Bareilly</option>
                        <option value="Bargarh (Baragarh)">Bargarh (Baragarh)</option>
                        <option value="Barmer">Barmer</option>
                        <option value="Barnala">Barnala</option>
                        <option value="Barpeta">Barpeta</option>
                        <option value="Barwani">Barwani</option>
                        <option value="Bastar">Bastar</option>
                        <option value="Basti">Basti</option>
                        <option value="Bathinda">Bathinda</option>
                        <option value="Beed">Beed</option>
                        <option value="Begusarai">Begusarai</option>
                        <option value="Belgaum">Belgaum</option>
                        <option value="Bellary">Bellary</option>
                        <option value="Betul">Betul</option>
                        <option value="Bhadrak">Bhadrak</option>
                        <option value="Bhagalpur">Bhagalpur</option>
                        <option value="Bhandara">Bhandara</option>
                        <option value="Bharatpur">Bharatpur</option>
                        <option value="Bharuch">Bharuch</option>
                        <option value="Bhavnagar">Bhavnagar</option>
                        <option value="Bhilwara">Bhilwara</option>
                        <option value="Bhind">Bhind</option>
                        <option value="Bhiwani">Bhiwani</option>
                        <option value="Bhojpur">Bhojpur</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Bidar">Bidar</option>
                        <option value="Bijapur">Bijapur</option>
                        <option value="Bijapur">Bijapur</option>
                        <option value="Bijnor">Bijnor</option>
                        <option value="Bikaner">Bikaner</option>
                        <option value="Bilaspur">Bilaspur</option>
                        <option value="Bilaspur">Bilaspur</option>
                        <option value="Birbhum">Birbhum</option>
                        <option value="Bishnupur">Bishnupur</option>
                        <option value="Bokaro">Bokaro</option>
                        <option value="Bongaigaon">Bongaigaon</option>
                        <option value="Boudh (Bauda)">Boudh (Bauda)</option>
                        <option value="Budaun">Budaun</option>
                        <option value="Bulandshahr">Bulandshahr</option>
                        <option value="Buldhana">Buldhana</option>
                        <option value="Bundi">Bundi</option>
                        <option value="Burhanpur">Burhanpur</option>
                        <option value="Buxar">Buxar</option>
                        <option value="Cachar">Cachar</option>
                        <option value="Central Delhi">Central Delhi</option>
                        <option value="Chamarajnagar">Chamarajnagar</option>
                        <option value="Chamba">Chamba</option>
                        <option value="Chamoli">Chamoli</option>
                        <option value="Champawat">Champawat</option>
                        <option value="Champhai">Champhai</option>
                        <option value="Chandauli">Chandauli</option>
                        <option value="Chandel">Chandel</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chandrapur">Chandrapur</option>
                        <option value="Changlang">Changlang</option>
                        <option value="Chatra">Chatra</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Chhatarpur">Chhatarpur</option>
                        <option value="Chhatrapati Shahuji Maharaj Nagar">Chhatrapati Shahuji Maharaj Nagar</option>
                        <option value="Chhindwara">Chhindwara</option>
                        <option value="Chikkaballapur">Chikkaballapur</option>
                        <option value="Chikkamagaluru">Chikkamagaluru</option>
                        <option value="Chirang">Chirang</option>
                        <option value="Chitradurga">Chitradurga</option>
                        <option value="Chitrakoot">Chitrakoot</option>
                        <option value="Chittoor">Chittoor</option>
                        <option value="Chittorgarh">Chittorgarh</option>
                        <option value="Churachandpur">Churachandpur</option>
                        <option value="Churu">Churu</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Cooch Behar">Cooch Behar</option>
                        <option value="Cuddalore">Cuddalore</option>
                        <option value="Cuttack">Cuttack</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Dahod">Dahod</option>
                        <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
                        <option value="Dakshina Kannada">Dakshina Kannada</option>
                        <option value="Daman">Daman</option>
                        <option value="Damoh">Damoh</option>
                        <option value="Dantewada">Dantewada</option>
                        <option value="Darbhanga">Darbhanga</option>
                        <option value="Darjeeling">Darjeeling</option>
                        <option value="Darrang">Darrang</option>
                        <option value="Datia">Datia</option>
                        <option value="Dausa">Dausa</option>
                        <option value="Davanagere">Davanagere</option>
                        <option value="Debagarh (Deogarh)">Debagarh (Deogarh)</option>
                        <option value="Dehradun">Dehradun</option>
                        <option value="Deoghar">Deoghar</option>
                        <option value="Deoria">Deoria</option>
                        <option value="Dewas">Dewas</option>
                        <option value="Dhalai">Dhalai</option>
                        <option value="Dhamtari">Dhamtari</option>
                        <option value="Dhanbad">Dhanbad</option>
                        <option value="Dhar">Dhar</option>
                        <option value="Dharmapuri">Dharmapuri</option>
                        <option value="Dharwad">Dharwad</option>
                        <option value="Dhemaji">Dhemaji</option>
                        <option value="Dhenkanal">Dhenkanal</option>
                        <option value="Dholpur">Dholpur</option>
                        <option value="Dhubri">Dhubri</option>
                        <option value="Dhule">Dhule</option>
                        <option value="Dibang Valley">Dibang Valley</option>
                        <option value="Dibrugarh">Dibrugarh</option>
                        <option value="Dima Hasao">Dima Hasao</option>
                        <option value="Dimapur">Dimapur</option>
                        <option value="Dindigul">Dindigul</option>
                        <option value="Dindori">Dindori</option>
                        <option value="Diu">Diu</option>
                        <option value="Doda">Doda</option>
                        <option value="Dumka">Dumka</option>
                        <option value="Dungapur">Dungapur</option>
                        <option value="Durg">Durg</option>
                        <option value="East Champaran">East Champaran</option>
                        <option value="East Delhi">East Delhi</option>
                        <option value="East Garo Hills">East Garo Hills</option>
                        <option value="East Khasi Hills">East Khasi Hills</option>
                        <option value="East Siang">East Siang</option>
                        <option value="East Sikkim">East Sikkim</option>
                        <option value="East Singhbhum">East Singhbhum</option>
                        <option value="Eluru">Eluru</option>
                        <option value="Ernakulam">Ernakulam</option>
                        <option value="Erode">Erode</option>
                        <option value="Etah">Etah</option>
                        <option value="Etawah">Etawah</option>
                        <option value="Faizabad">Faizabad</option>
                        <option value="Faridabad">Faridabad</option>
                        <option value="Faridkot">Faridkot</option>
                        <option value="Farrukhabad">Farrukhabad</option>
                        <option value="Fatehabad">Fatehabad</option>
                        <option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
                        <option value="Fatehpur">Fatehpur</option>
                        <option value="Fazilka">Fazilka</option>
                        <option value="Firozabad">Firozabad</option>
                        <option value="Firozpur">Firozpur</option>
                        <option value="Gadag">Gadag</option>
                        <option value="Gadchiroli">Gadchiroli</option>
                        <option value="Gajapati">Gajapati</option>
                        <option value="Ganderbal">Ganderbal</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Ganganagar">Ganganagar</option>
                        <option value="Ganjam">Ganjam</option>
                        <option value="Garhwa">Garhwa</option>
                        <option value="Gautam Buddh Nagar">Gautam Buddh Nagar</option>
                        <option value="Gaya">Gaya</option>
                        <option value="Ghaziabad">Ghaziabad</option>
                        <option value="Ghazipur">Ghazipur</option>
                        <option value="Giridih">Giridih</option>
                        <option value="Goalpara">Goalpara</option>
                        <option value="Godda">Godda</option>
                        <option value="Golaghat">Golaghat</option>
                        <option value="Gonda">Gonda</option>
                        <option value="Gondia">Gondia</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Gorakhpur">Gorakhpur</option>
                        <option value="Gulbarga">Gulbarga</option>
                        <option value="Gumla">Gumla</option>
                        <option value="Guna">Guna</option>
                        <option value="Guntur">Guntur</option>
                        <option value="Gurdaspur">Gurdaspur</option>
                        <option value="Gurgaon">Gurgaon</option>
                        <option value="Gwalior">Gwalior</option>
                        <option value="Hailakandi">Hailakandi</option>
                        <option value="Hamirpur">Hamirpur</option>
                        <option value="Hamirpur">Hamirpur</option>
                        <option value="Hanumangarh">Hanumangarh</option>
                        <option value="Harda">Harda</option>
                        <option value="Hardoi">Hardoi</option>
                        <option value="Haridwar">Haridwar</option>
                        <option value="Hassan">Hassan</option>
                        <option value="Haveri district">Haveri district</option>
                        <option value="Hazaribag">Hazaribag</option>
                        <option value="Hingoli">Hingoli</option>
                        <option value="Hissar">Hissar</option>
                        <option value="Hooghly">Hooghly</option>
                        <option value="Hoshangabad">Hoshangabad</option>
                        <option value="Hoshiarpur">Hoshiarpur</option>
                        <option value="Howrah">Howrah</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Idukki">Idukki</option>
                        <option value="Imphal East">Imphal East</option>
                        <option value="Imphal West">Imphal West</option>
                        <option value="Indore">Indore</option>
                        <option value="Jabalpur">Jabalpur</option>
                        <option value="Jagatsinghpur">Jagatsinghpur</option>
                        <option value="Jaintia Hills">Jaintia Hills</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Jaisalmer">Jaisalmer</option>
                        <option value="Jajpur">Jajpur</option>
                        <option value="Jalandhar">Jalandhar</option>
                        <option value="Jalaun">Jalaun</option>
                        <option value="Jalgaon">Jalgaon</option>
                        <option value="Jalna">Jalna</option>
                        <option value="Jalore">Jalore</option>
                        <option value="Jalpaiguri">Jalpaiguri</option>
                        <option value="Jammu">Jammu</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Jamtara">Jamtara</option>
                        <option value="Jamui">Jamui</option>
                        <option value="Janjgir-Champa">Janjgir-Champa</option>
                        <option value="Jashpur">Jashpur</option>
                        <option value="Jaunpur district">Jaunpur district</option>
                        <option value="Jehanabad">Jehanabad</option>
                        <option value="Jhabua">Jhabua</option>
                        <option value="Jhajjar">Jhajjar</option>
                        <option value="Jhalawar">Jhalawar</option>
                        <option value="Jhansi">Jhansi</option>
                        <option value="Jharsuguda">Jharsuguda</option>
                        <option value="Jhunjhunu">Jhunjhunu</option>
                        <option value="Jind">Jind</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="Jorhat">Jorhat</option>
                        <option value="Junagadh">Junagadh</option>
                        <option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option>
                        <option value="Kabirdham (formerly Kawardha)">Kabirdham (formerly Kawardha)</option>
                        <option value="Kadapa">Kadapa</option>
                        <option value="Kaimur">Kaimur</option>
                        <option value="Kaithal">Kaithal</option>
                        <option value="Kakinada">Kakinada</option>
                        <option value="Kalahandi">Kalahandi</option>
                        <option value="Kamrup">Kamrup</option>
                        <option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
                        <option value="Kanchipuram">Kanchipuram</option>
                        <option value="Kandhamal">Kandhamal</option>
                        <option value="Kangra">Kangra</option>
                        <option value="Kanker">Kanker</option>
                        <option value="Kannauj">Kannauj</option>
                        <option value="Kannur">Kannur</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="Kanshi Ram Nagar">Kanshi Ram Nagar</option>
                        <option value="Kanyakumari">Kanyakumari</option>
                        <option value="Kapurthala">Kapurthala</option>
                        <option value="Karaikal">Karaikal</option>
                        <option value="Karauli">Karauli</option>
                        <option value="Karbi Anglong">Karbi Anglong</option>
                        <option value="Kargil">Kargil</option>
                        <option value="Karimganj">Karimganj</option>
                        <option value="Karimnagar">Karimnagar</option>
                        <option value="Karnal">Karnal</option>
                        <option value="Karur">Karur</option>
                        <option value="Kasaragod">Kasaragod</option>
                        <option value="Kathua">Kathua</option>
                        <option value="Katihar">Katihar</option>
                        <option value="Katni">Katni</option>
                        <option value="Kaushambi">Kaushambi</option>
                        <option value="Kendrapara">Kendrapara</option>
                        <option value="Kendujhar (Keonjhar)">Kendujhar (Keonjhar)</option>
                        <option value="Khagaria">Khagaria</option>
                        <option value="Khammam">Khammam</option>
                        <option value="Khandwa (East Nimar)">Khandwa (East Nimar)</option>
                        <option value="Khargone (West Nimar)">Khargone (West Nimar)</option>
                        <option value="Kheda">Kheda</option>
                        <option value="Khordha">Khordha</option>
                        <option value="Khowai">Khowai</option>
                        <option value="Khunti">Khunti</option>
                        <option value="Kinnaur">Kinnaur</option>
                        <option value="Kishanganj">Kishanganj</option>
                        <option value="Kishtwar">Kishtwar</option>
                        <option value="Kodagu">Kodagu</option>
                        <option value="Koderma">Koderma</option>
                        <option value="Kohima">Kohima</option>
                        <option value="Kokrajhar">Kokrajhar</option>
                        <option value="Kolar">Kolar</option>
                        <option value="Kolasib">Kolasib</option>
                        <option value="Kolhapur">Kolhapur</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Kollam">Kollam</option>
                        <option value="Koppal">Koppal</option>
                        <option value="Koraput">Koraput</option>
                        <option value="Korba">Korba</option>
                        <option value="Koriya">Koriya</option>
                        <option value="Kota">Kota</option>
                        <option value="Kottayam">Kottayam</option>
                        <option value="Kozhikode">Kozhikode</option>
                        <option value="Krishna">Krishna</option>
                        <option value="Kulgam">Kulgam</option>
                        <option value="Kullu">Kullu</option>
                        <option value="Kupwara">Kupwara</option>
                        <option value="Kurnool">Kurnool</option>
                        <option value="Kurukshetra">Kurukshetra</option>
                        <option value="Kurung Kumey">Kurung Kumey</option>
                        <option value="Kushinagar">Kushinagar</option>
                        <option value="Kutch">Kutch</option>
                        <option value="Lahaul and Spiti">Lahaul and Spiti</option>
                        <option value="Lakhimpur">Lakhimpur</option>
                        <option value="Lakhimpur Kheri">Lakhimpur Kheri</option>
                        <option value="Lakhisarai">Lakhisarai</option>
                        <option value="Lalitpur">Lalitpur</option>
                        <option value="Latehar">Latehar</option>
                        <option value="Latur">Latur</option>
                        <option value="Lawngtlai">Lawngtlai</option>
                        <option value="Leh">Leh</option>
                        <option value="Lohardaga">Lohardaga</option>
                        <option value="Lohit">Lohit</option>
                        <option value="Lower Dibang Valley">Lower Dibang Valley</option>
                        <option value="Lower Subansiri">Lower Subansiri</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Ludhiana">Ludhiana</option>
                        <option value="Lunglei">Lunglei</option>
                        <option value="Madhepura">Madhepura</option>
                        <option value="Madhubani">Madhubani</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Mahamaya Nagar">Mahamaya Nagar</option>
                        <option value="Maharajganj">Maharajganj</option>
                        <option value="Mahasamund">Mahasamund</option>
                        <option value="Mahbubnagar">Mahbubnagar</option>
                        <option value="Mahe">Mahe</option>
                        <option value="Mahendragarh">Mahendragarh</option>
                        <option value="Mahoba">Mahoba</option>
                        <option value="Mainpuri">Mainpuri</option>
                        <option value="Malappuram">Malappuram</option>
                        <option value="Maldah">Maldah</option>
                        <option value="Malkangiri">Malkangiri</option>
                        <option value="Mamit">Mamit</option>
                        <option value="Mandi">Mandi</option>
                        <option value="Mandla">Mandla</option>
                        <option value="Mandsaur">Mandsaur</option>
                        <option value="Mandya">Mandya</option>
                        <option value="Mansa">Mansa</option>
                        <option value="Marigaon">Marigaon</option>
                        <option value="Mathura">Mathura</option>
                        <option value="Mau">Mau</option>
                        <option value="Mayurbhanj">Mayurbhanj</option>
                        <option value="Medak">Medak</option>
                        <option value="Meerut">Meerut</option>
                        <option value="Mehsana">Mehsana</option>
                        <option value="Mewat">Mewat</option>
                        <option value="Mirzapur">Mirzapur</option>
                        <option value="Moga">Moga</option>
                        <option value="Mokokchung">Mokokchung</option>
                        <option value="Mon">Mon</option>
                        <option value="Moradabad">Moradabad</option>
                        <option value="Morena">Morena</option>
                        <option value="Mumbai City">Mumbai City</option>
                        <option value="Mumbai suburban">Mumbai suburban</option>
                        <option value="Munger">Munger</option>
                        <option value="Murshidabad">Murshidabad</option>
                        <option value="Muzaffarnagar">Muzaffarnagar</option>
                        <option value="Muzaffarpur">Muzaffarpur</option>
                        <option value="Mysore">Mysore</option>
                        <option value="Nabarangpur">Nabarangpur</option>
                        <option value="Nadia">Nadia</option>
                        <option value="Nagaon">Nagaon</option>
                        <option value="Nagapattinam">Nagapattinam</option>
                        <option value="Nagaur">Nagaur</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Nainital">Nainital</option>
                        <option value="Nalanda">Nalanda</option>
                        <option value="Nalbari">Nalbari</option>
                        <option value="Nalgonda">Nalgonda</option>
                        <option value="Namakkal">Namakkal</option>
                        <option value="Nanded">Nanded</option>
                        <option value="Nandurbar">Nandurbar</option>
                        <option value="Narayanpur">Narayanpur</option>
                        <option value="Narmada">Narmada</option>
                        <option value="Narsinghpur">Narsinghpur</option>
                        <option value="Nashik">Nashik</option>
                        <option value="Navsari">Navsari</option>
                        <option value="Nawada">Nawada</option>
                        <option value="Nawanshahr">Nawanshahr</option>
                        <option value="Nayagarh">Nayagarh</option>
                        <option value="Neemuch">Neemuch</option>
                        <option value="Nellore">Nellore</option>
                        <option value="New Delhi">New Delhi</option>
                        <option value="Nilgiris">Nilgiris</option>
                        <option value="Nizamabad">Nizamabad</option>
                        <option value="North 24 Parganas">North 24 Parganas</option>
                        <option value="North Delhi">North Delhi</option>
                        <option value="North East Delhi">North East Delhi</option>
                        <option value="North Goa">North Goa</option>
                        <option value="North Sikkim">North Sikkim</option>
                        <option value="North Tripura">North Tripura</option>
                        <option value="North West Delhi">North West Delhi</option>
                        <option value="Nuapada">Nuapada</option>
                        <option value="Ongole">Ongole</option>
                        <option value="Osmanabad">Osmanabad</option>
                        <option value="Pakur">Pakur</option>
                        <option value="Palakkad">Palakkad</option>
                        <option value="Palamu">Palamu</option>
                        <option value="Pali">Pali</option>
                        <option value="Palwal">Palwal</option>
                        <option value="Panchkula">Panchkula</option>
                        <option value="Panchmahal">Panchmahal</option>
                        <option value="Panchsheel Nagar district (Hapur)">Panchsheel Nagar district (Hapur)</option>
                        <option value="Panipat">Panipat</option>
                        <option value="Panna">Panna</option>
                        <option value="Papum Pare">Papum Pare</option>
                        <option value="Parbhani">Parbhani</option>
                        <option value="Paschim Medinipur">Paschim Medinipur</option>
                        <option value="Patan">Patan</option>
                        <option value="Pathanamthitta">Pathanamthitta</option>
                        <option value="Pathankot">Pathankot</option>
                        <option value="Patiala">Patiala</option>
                        <option value="Patna">Patna</option>
                        <option value="Pauri Garhwal">Pauri Garhwal</option>
                        <option value="Perambalur">Perambalur</option>
                        <option value="Phek">Phek</option>
                        <option value="Pilibhit">Pilibhit</option>
                        <option value="Pithoragarh">Pithoragarh</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Poonch">Poonch</option>
                        <option value="Porbandar">Porbandar</option>
                        <option value="Pratapgarh">Pratapgarh</option>
                        <option value="Pratapgarh">Pratapgarh</option>
                        <option value="Pudukkottai">Pudukkottai</option>
                        <option value="Pulwama">Pulwama</option>
                        <option value="Pune">Pune</option>
                        <option value="Purba Medinipur">Purba Medinipur</option>
                        <option value="Puri">Puri</option>
                        <option value="Purnia">Purnia</option>
                        <option value="Purulia">Purulia</option>
                        <option value="Raebareli">Raebareli</option>
                        <option value="Raichur">Raichur</option>
                        <option value="Raigad">Raigad</option>
                        <option value="Raigarh">Raigarh</option>
                        <option value="Raipur">Raipur</option>
                        <option value="Raisen">Raisen</option>
                        <option value="Rajauri">Rajauri</option>
                        <option value="Rajgarh">Rajgarh</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Rajnandgaon">Rajnandgaon</option>
                        <option value="Rajsamand">Rajsamand</option>
                        <option value="Ramabai Nagar (Kanpur Dehat)">Ramabai Nagar (Kanpur Dehat)</option>
                        <option value="Ramanagara">Ramanagara</option>
                        <option value="Ramanathapuram">Ramanathapuram</option>
                        <option value="Ramban">Ramban</option>
                        <option value="Ramgarh">Ramgarh</option>
                        <option value="Rampur">Rampur</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Ratlam">Ratlam</option>
                        <option value="Ratnagiri">Ratnagiri</option>
                        <option value="Rayagada">Rayagada</option>
                        <option value="Reasi">Reasi</option>
                        <option value="Rewa">Rewa</option>
                        <option value="Rewari">Rewari</option>
                        <option value="Ri Bhoi">Ri Bhoi</option>
                        <option value="Rohtak">Rohtak</option>
                        <option value="Rohtas">Rohtas</option>
                        <option value="Rudraprayag">Rudraprayag</option>
                        <option value="Rupnagar">Rupnagar</option>
                        <option value="Sabarkantha">Sabarkantha</option>
                        <option value="Sagar">Sagar</option>
                        <option value="Saharanpur">Saharanpur</option>
                        <option value="Saharsa">Saharsa</option>
                        <option value="Sahibganj">Sahibganj</option>
                        <option value="Saiha">Saiha</option>
                        <option value="Salem">Salem</option>
                        <option value="Samastipur">Samastipur</option>
                        <option value="Samba">Samba</option>
                        <option value="Sambalpur">Sambalpur</option>
                        <option value="Sangli">Sangli</option>
                        <option value="Sangrur">Sangrur</option>
                        <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
                        <option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
                        <option value="Saran">Saran</option>
                        <option value="Satara">Satara</option>
                        <option value="Satna">Satna</option>
                        <option value="Sawai Madhopur">Sawai Madhopur</option>
                        <option value="Sehore">Sehore</option>
                        <option value="Senapati">Senapati</option>
                        <option value="Seoni">Seoni</option>
                        <option value="Seraikela Kharsawan">Seraikela Kharsawan</option>
                        <option value="Serchhip">Serchhip</option>
                        <option value="Shahdol">Shahdol</option>
                        <option value="Shahjahanpur">Shahjahanpur</option>
                        <option value="Shajapur">Shajapur</option>
                        <option value="Shamli">Shamli</option>
                        <option value="Sheikhpura">Sheikhpura</option>
                        <option value="Sheohar">Sheohar</option>
                        <option value="Sheopur">Sheopur</option>
                        <option value="Shimla">Shimla</option>
                        <option value="Shimoga">Shimoga</option>
                        <option value="Shivpuri">Shivpuri</option>
                        <option value="Shopian">Shopian</option>
                        <option value="Shravasti">Shravasti</option>
                        <option value="Sibsagar">Sibsagar</option>
                        <option value="Siddharthnagar">Siddharthnagar</option>
                        <option value="Sidhi">Sidhi</option>
                        <option value="Sikar">Sikar</option>
                        <option value="Simdega">Simdega</option>
                        <option value="Sindhudurg">Sindhudurg</option>
                        <option value="Singrauli">Singrauli</option>
                        <option value="Sirmaur">Sirmaur</option>
                        <option value="Sirohi">Sirohi</option>
                        <option value="Sirsa">Sirsa</option>
                        <option value="Sitamarhi">Sitamarhi</option>
                        <option value="Sitapur">Sitapur</option>
                        <option value="Sivaganga">Sivaganga</option>
                        <option value="Siwan">Siwan</option>
                        <option value="Solan">Solan</option>
                        <option value="Solapur">Solapur</option>
                        <option value="Sonbhadra">Sonbhadra</option>
                        <option value="Sonipat">Sonipat</option>
                        <option value="Sonitpur">Sonitpur</option>
                        <option value="South 24 Parganas">South 24 Parganas</option>
                        <option value="South Delhi">South Delhi</option>
                        <option value="South Garo Hills">South Garo Hills</option>
                        <option value="South Goa">South Goa</option>
                        <option value="South Sikkim">South Sikkim</option>
                        <option value="South Tripura">South Tripura</option>
                        <option value="South West Delhi">South West Delhi</option>
                        <option value="Sri Muktsar Sahib">Sri Muktsar Sahib</option>
                        <option value="Srikakulam">Srikakulam</option>
                        <option value="Srinagar">Srinagar</option>
                        <option value="Subarnapur (Sonepur)">Subarnapur (Sonepur)</option>
                        <option value="Sultanpur">Sultanpur</option>
                        <option value="Sundergarh">Sundergarh</option>
                        <option value="Supaul">Supaul</option>
                        <option value="Surat">Surat</option>
                        <option value="Surendranagar">Surendranagar</option>
                        <option value="Surguja">Surguja</option>
                        <option value="Tamenglong">Tamenglong</option>
                        <option value="Tarn Taran">Tarn Taran</option>
                        <option value="Tawang">Tawang</option>
                        <option value="Tehri Garhwal">Tehri Garhwal</option>
                        <option value="Thane">Thane</option>
                        <option value="Thanjavur">Thanjavur</option>
                        <option value="The Dangs">The Dangs</option>
                        <option value="Theni">Theni</option>
                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                        <option value="Thoothukudi">Thoothukudi</option>
                        <option value="Thoubal">Thoubal</option>
                        <option value="Thrissur">Thrissur</option>
                        <option value="Tikamgarh">Tikamgarh</option>
                        <option value="Tinsukia">Tinsukia</option>
                        <option value="Tirap">Tirap</option>
                        <option value="Tiruchirappalli">Tiruchirappalli</option>
                        <option value="Tirunelveli">Tirunelveli</option>
                        <option value="Tirupur">Tirupur</option>
                        <option value="Tiruvallur">Tiruvallur</option>
                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                        <option value="Tiruvarur">Tiruvarur</option>
                        <option value="Tonk">Tonk</option>
                        <option value="Tuensang">Tuensang</option>
                        <option value="Tumkur">Tumkur</option>
                        <option value="Udaipur">Udaipur</option>
                        <option value="Udalguri">Udalguri</option>
                        <option value="Udham Singh Nagar">Udham Singh Nagar</option>
                        <option value="Udhampur">Udhampur</option>
                        <option value="Udupi">Udupi</option>
                        <option value="Ujjain">Ujjain</option>
                        <option value="Ukhrul">Ukhrul</option>
                        <option value="Umaria">Umaria</option>
                        <option value="Una">Una</option>
                        <option value="Unnao">Unnao</option>
                        <option value="Upper Siang">Upper Siang</option>
                        <option value="Upper Subansiri">Upper Subansiri</option>
                        <option value="Uttar Dinajpur">Uttar Dinajpur</option>
                        <option value="Uttara Kannada">Uttara Kannada</option>
                        <option value="Uttarkashi">Uttarkashi</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Vaishali">Vaishali</option>
                        <option value="Valsad">Valsad</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Vellore">Vellore</option>
                        <option value="Vidisha">Vidisha</option>
                        <option value="Viluppuram">Viluppuram</option>
                        <option value="Virudhunagar">Virudhunagar</option>
                        <option value="Visakhapatnam">Visakhapatnam</option>
                        <option value="Vizianagaram">Vizianagaram</option>
                        <option value="Vyara">Vyara</option>
                        <option value="Warangal">Warangal</option>
                        <option value="Wardha">Wardha</option>
                        <option value="Washim">Washim</option>
                        <option value="Wayanad">Wayanad</option>
                        <option value="West Champaran">West Champaran</option>
                        <option value="West Delhi">West Delhi</option>
                        <option value="West Garo Hills">West Garo Hills</option>
                        <option value="West Kameng">West Kameng</option>
                        <option value="West Khasi Hills">West Khasi Hills</option>
                        <option value="West Siang">West Siang</option>
                        <option value="West Sikkim">West Sikkim</option>
                        <option value="West Singhbhum">West Singhbhum</option>
                        <option value="West Tripura">West Tripura</option>
                        <option value="Wokha">Wokha</option>
                        <option value="Yadgir">Yadgir</option>
                        <option value="Yamuna Nagar">Yamuna Nagar</option>
                        <option value="Yanam">Yanam</option>
                        <option value="Yavatmal">Yavatmal</option>
                        <option value="Zunheboto">Zunheboto</option>
                    </select>
                  </div>
                  
                  <!--               <div class="form-group"><div class="col-sm-offset-2 col-sm-10"><div class="g-recaptcha" data-sitekey="6Lfb6sAhAAAAAHqXPHPcsnfPxBgs7S1hvyg34dMl"></div></div></div>-->
                  <div class="button text-center">
                    <button class="submit btn   " type="submit" data-loading-text="Sending...">Send</button>
                  </div>
                </div>
              </form>
  
               
              </div>
            </div>
          </div>
    </div>

</section>
  <section class="help_section text-center ">
      <div class="container">
         @if (str_replace('-',' ',Request::segment(2))=="trademark registration")
              <div class="head_sec wow  text-center" style="margin-bottom:40px">
                <h2 class="trade-head">Types of Trademark Registration</h2>
                <p class="trade-para">When it comes to trademarking your brand, it's a jungle out there. But if you don't know which aspect(s) of <br> your brand image is worth protecting, it can be like wandering around in the dark. So let us help you find the light.</p>
              </div> 
                <div>
                  <div class="banner_count_boxs">
                    <div class="row">

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center" data-aos="fade-up" data-aos-delay="200">
                          <h3>Product Mark</h3>
                          <p>Unlike a service mark, which is used to identify a business and its services, a product mark identifies the origin of a good or product. A product mark also helps preserve the company's reputation.</p>
                        </div>
                      </div>

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center "  data-aos="fade-down" data-aos-delay="200">
                          <h3>Service Mark</h3>
                          <p>A service mark is similar to a product mark, but instead of identifying the source of goods, it identifies the source of services. Yahoo, for example, may brand certain products with a trademark; however, it uses a service mark on its internet searching service.</p>
                        </div>
                      </div>

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center " data-aos="fade-up" data-aos-delay="200">
                          <h3>Collective Mark</h3>
                          <p>The collective mark informs the public about the unique characteristics of the goods and services that are used to represent a group. A trademark holder can be an association, a public institution, or a Section 8 corporation.</p>
                        </div>
                      </div>

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center " data-aos="fade-up" data-aos-delay="200">
                          <h3>Certification Mark</h3>
                          <p>A certification mark is a sign, indicating that the goods/services are certified by the owner of the sign in terms of origin, material, quality and accuracy. This differs from a standard trademark and distinguishes goods/services that originate from a single company.</p>
                        </div>
                      </div>

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center " data-aos="fade-down" data-aos-delay="200">
                          <h3>Shape Marks</h3>
                          <p>Shape marks are used to distinguish the shape of a product so that customers will associate it with a specific manufacturer, thereby increasing brand recognition and sales.</p>
                        </div>
                      </div>

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center " data-aos="fade-up" data-aos-delay="200">
                          <h3>Pattern Mark</h3>
                          <p>The pattern marks are for products that have a uniquely designed pattern. If the pattern is not distinct, it will not be registered.</p>
                        </div>
                      </div>

                      <div class="col-md-4 wow ">
                        <div class="banner_count_box text-center "  data-aos="fade-up" data-aos-delay="200">
                          <h3>Sound Mark</h3>
                          <p>A sound mark is a catchy tune, jingle, or mnemonic that identifies a brand or product. It can be used to help people remember the name of a product or service. One of the most well-known sound marks in India is the tune for IPL.</p>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="private limited company")
                 <div class="row align-items-center bg_white_box"  data-aos="zoom-in">
                  <div class="col-lg-6 col-sm-12 col-12">
                    <div class="help_txt mb-2">
                      <h3 class="color_white" style="margin-bottom: 0px; text-align: center;" data-aos="zoom-out" data-aos-delay="200">Prosper with a private limited company</h3>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-12">
                    <div class="help_txt text-left">
                    <p>Most new businesses in India opt for a private limited company due to the flexibility it offers. You can make your own rules, appoint board members and decide whom to partner with — all within limits. Private limited company offers limited liability for its shareholders, with certain restrictions placed on ownership. This makes a private limited company ideal for companies that wish to raise funds from the public.</p>
                    </div>
                  </div>
               </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="proprietorship firm")
                   <div class="row align-items-center bg_white_box"  data-aos="zoom-in">
                    <div class="col-lg-6 col-sm-12 col-12">
                      <div class="help_txt mb-2">
                        <h3 class="color_white" style="margin-bottom: 0px; text-align: center;" data-aos="zoom-out" data-aos-delay="200">Simplified business ownership</h3>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                      <div class="help_txt text-left">
                      <p>Sole proprietorship structure is very easy to get started and in many cases, offers the lowest cost of entry for starting a business. It is also a simple way for freelancers and other self-employed professionals to get paid for their work by setting up a company that has no more than one owner.</p>
                      </div>
                    </div>
                  </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="limited liability partnership")
                  <div class="row align-items-center bg_white_box"  data-aos="zoom-in">
                    <div class="col-lg-6 col-sm-12 col-12">
                      <div class="help_txt mb-2">
                        <h3 class="color_white" style="margin-bottom: 0px; text-align: center;" data-aos="zoom-out" data-aos-delay="200">Limited Liability. Unlimited Partnership</h3>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                      <div class="help_txt text-left">
                      <p>Limited Liability Partnership is the best of both worlds. It keeps all the benefits of a partnership firm and allows you to enjoy limited liability, so if things go wrong then your personal assets are safe. It's quick and easy to get your LLP registered with Finpro.</p>
                      </div>
                    </div>
                  </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="GST return filing")
                    <div class="row align-items-center bg_white_box"  data-aos="zoom-in">
                    <div class="col-lg-6 col-sm-12 col-12">
                      <div class="help_txt mb-2">
                        <h3 class="color_white" style="margin-bottom: 0px; text-align: center;" data-aos="zoom-out" data-aos-delay="200">Features/Importance of GST</h3>
                        <p class="text-white text-start">Here are the major reasons why people opt for this service:</p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                      <div class="help_txt text-left">
                      <ul>
                        <li>GST eliminates the cascading effect. Therefore, you are no longer subject to paying tax on tax. This saves you money.</li>
                        <li>Higher threshold for sale of goods and services. This means small businesses falling below the limit are not subject to GST.</li>
                        <li>Easier for startups and e-commerce businesses</li>
                        <li>More organised system</li>
                      </ul>
                      </div>
                    </div>
                  </div>
              @elseif(str_replace('-',' ',Request::segment(2))=="accounting bookkeeping")
                <div class="row align-items-center bg_white_box"  data-aos="zoom-in">
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="help_txt mb-2">
                  <h3 class="color_white" style="margin-bottom: 0px; text-align: left;" data-aos="zoom-out" data-aos-delay="200">You need accounting services if you:</h3>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="help_txt text-left">
                 <ul>
                <li>Never get your financial reports when you need them</li>
                <li>Need to know where your company stands financially</li>
                <li>Don’t trust the accuracy of my company’s accounting records</li>
                <li>Don’t have the time</li>
                <li>Find hiring and training an accountant a hassle</li>
              </ul>
                </div>
              </div>
            </div>

              @endif
           
      </div>
  </section>
              @if (str_replace('-',' ',Request::segment(2))=="trademark registration")
                <section class="LLP" data-wow-delay="0.3s" >
                    <div class="container">
                      
                      <div class="head_sec text-center">
                        <div class="row align-items-center">
                          <div class="col-lg-10 col-sm-12 text-left" >
                            <h2 class="llp-head"  data-aos="fade-up" data-aos-delay="400">Trademark Registration made easy</h2>
                            <p class="llp-para"  data-aos="fade-up" data-aos-delay="400">Here’s everything you need to know:</p>
                          </div>
                        </div>
                      </div>

                      <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-delay="400" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Eligibility Criteria</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Documents Required</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Process</a>
                        </li>
                      </ul><!-- Tab panes -->
                      <div class="tab-content"  data-aos="fade-up" data-aos-delay="400">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="round_box">
                              <p class="p_rel"> individual or company can apply for a trademark so that their product or service can be protected. The application must include the trademark, the applicant's name and address, as well as the agent and the power of attorney.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div>
                                <p class="p_rel"> Proof of Applicant</p>
                                <p class="p_rel"> Brand name and logo</p>
                                <p class="p_rel"> User Affidavit</p>
                                <p class="p_rel"> Proof of TM use</p>
                                <p class="p_rel"> MSME/Startup Recognition</p>
                                <p class="p_rel"> Signed form TM-48</p>
                              </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="steps">
                              <div class="step">
                                <div>
                                  <p><b>Step 1:</b> Trademark Search</p> 
                                  <p><b>Step 2:</b> Selection of Classes</p> 
                                  <p><b>Step 3:</b> Application filing (Get ™ number)</p> 
                                  <p><b>Step 4:</b> Use ™ symbol</p>
                                  <p><b>Step 5:</b> Application processing begins</p>
                                  <p><b>Step 6:</b> Objection on the Trademark Application</p>
                                  <p><b>Step 7:</b> Hearing</p>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </section>
           
              @elseif(str_replace('-',' ',Request::segment(2))=="private limited company")
               <section class="LLP" data-wow-delay="0.3s" >
                    <div class="container">
                      
                      <div class="head_sec text-center">
                        <div class="row align-items-center">
                          <div class="col-lg-10 col-sm-12 text-left">
                            <h2 class="llp-head"  data-aos="fade-up" data-aos-delay="400">Private Limited Registration made easy!</h2>
                            <p class="llp-para"  data-aos="fade-up" data-aos-delay="400">Here’s everything you need to know:</p>
                          </div>
                        </div>
                      </div>

                      <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-delay="400" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Eligibility Criteria</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Documents Required</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Process</a>
                        </li>
                      </ul><!-- Tab panes -->
                      <div class="tab-content"  data-aos="fade-up" data-aos-delay="400">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                          <div class="round_box">
                            <p class="p_rel"> Minimum 2 directors </p>
                            <p class="p_rel"> A unique name for your business</p>
                            <p class="p_rel"> Minimum authorized capital of at least ₹1 lakh </p>
                            <p class="p_rel"> A registered office </p>
                          </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                             <div>
                                <p>You would need scanned copies of:</p>
                                <!-- <p class="p_rel"> PAN card or passport (in case of foreign nationals & NRIs)  </p>
                                <p class="p_rel"> Voter ID/passport/driving license </p>
                                <p class="p_rel"> Scanned passport-sized photograph</p>
                                <p class="p_rel"> Specimen signature (blank document with signature [directors only])</p>
                                <p class="p_rel"> Latest bank statement/telephone or mobile bill/electricity or gas bill</p>
                                <p class="p_rel"> Notarized rental agreement in English</p>
                                <p class="p_rel"> No-objection certificate from the property owner</p>
                                <p class="p_rel"> Sale deed/property deed in English (in case of owned property)</p> -->

                                <p><b>Director's Documents</b></p>
                                <p class="p_rel"> Director's PAN</p>
                                <p class="p_rel"> Director's ID Proofs</p>
                                <p class="p_rel"> Aadhaar Card or Voter ID or Passport or Driver's License</p>
                                <p class="p_rel"> Address Proofs:</p>
                                <p class="p_rel"> Latest one month Savings Bank statement or</p>
                                <p class="p_rel"> Latest Telephone Bill on his own name or</p>
                                <p class="p_rel"> Latest Moblie Bill on his name or</p>
                                <p class="p_rel"> Latest Electricity Bill on his own name.</p>
                                <p class="p_rel"> Director's latest passport size photograph</p>
                                <p class="p_rel"> Director's Email ids</p>
                                <p class="p_rel"> Incase of Foreign directors, International Passport is mandatory</p>

                                <p><b>Company Documents</b></p>
                                <p class="p_rel"> Registered Office Address Proof: Latest Power Bill</p>
                                <p class="p_rel"> No-objection letter from the Landlord.</p>
                                <p class="p_rel"> Rental Agreement from the landlord if the premises are rented.</p>
                                <p class="p_rel"> Company email id.</p>

                              </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="steps">
                              <div class="step">
                                <div>
                                    <!-- <p><b>Step 1:</b> Arrange basic documents of Partners</p> 
                                    <p><b>Step 2:</b> Fill in an online form with accurate information</p> 
                                    <p><b>Step 3:</b> Apply for Digital Signature and DIN of Partners</p> 
                                    <p><b>Step 4:</b> Prepare all legal documents</p> 
                                    <p><b>Step 5:</b> Apply for name availability </p> 
                                    <p><b>Step 6:</b> Submit MoA, AoA, Declaration from Directors and Affidavits of the Directors </p> 
                                    <p><b>Step 7:</b> Collect Subscriber information such as address, occupation, nature of shares, number of shares subscribed etc </p> 
                                    <p><b>Step 8:</b> Apply for the PAN and TAN of the company </p> 
                                    <p><b>Step 9:</b> Obtain certificate of incorporation by ROC with a PAN and TAN </p> 
                                    <p><b>Step 10:</b> Open a current bank account on the company’s name </p> -->

                                <!--  <p><b>Step 1:</b> Reservation of Company’s Name</p>
                                  <p><b>Step 2:</b> Collection of Directors and Company reg office docs</p>
                                  <p><b>Step 3:</b> Procuring Digital Signature Certificate</p>
                                  <p><b>Step 4:</b> Writing MoA & AOA</p>
                                  <p><b>Step 5:</b> Application for the Incorporation of Company</p>
                                  <p><b>Step 6:</b> Approval of Company registration</p>
                                  <p><b>LLP</b></p> 
                                  <p><b>Step 1:</b> Reservation of LLP’s Name </p>
                                  <p><b>Step 2:</b> Collection of Partners and LLP reg office docs</p>
                                  <p><b>Step 3:</b> Procuring Digital Signature Certificate</p>
                                  <p><b>Step 4:</b> Application for the Incorporation of LLP</p>
                                  <p><b>Step 5:</b> Approval of LLP registration</p>
                                  <p><b>Step 6:</b> Writing LLP Deed</p>
                                  <p><b>Step 7:</b> Filing of LLP Deed</p> -->

                                  <!-- <p><b>Step 1:</b> Wind Up of Company</p>
                                  <p><b>Step 2:</b> Dissolution of Company</p>
                                  <p><b>Step 3:</b> Process of Winding up and Dissolution of Company</p>
                                  <p><b>LLP</b></p>
                                  <p><b>Step 1:</b> Striking Off Name of LLP</p>
                                  <p><b>Step 2:</b> Procedure for Striking Off Name</p>
                                  <p><b>Step 3:</b> Partners Liability After Striking Off</p> -->

                                  <p><b>Step 1:</b> Arrange basic documents of Partners</p> 
                                  <p><b>Step 2:</b> Fill in an online form with accurate information</p> 
                                  <p><b>Step 3:</b> Apply for Digital Signature and DIN of Partners</p> 
                                  <p><b>Step 4:</b> Prepare all legal documents</p> 
                                  <p><b>Step 5:</b> Apply for name availability </p> 
                                  <p><b>Step 6:</b> Submit MoA, AoA, Declaration from Directors and Affidavits of the Directors </p> 
                                  <p><b>Step 7:</b> Collect Subscriber information such as address, occupation, nature of shares, number of shares subscribed etc </p> 
                                  <p><b>Step 8:</b> Apply for the PAN and TAN of the company </p> 
                                  <p><b>Step 9:</b> Obtain certificate of incorporation by ROC with a PAN and TAN </p> 
                                  <p><b>Step 10:</b> Open a current bank account on the company’s name </p>

                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
               </section>
              @elseif(str_replace('-',' ',Request::segment(2))=="proprietorship firm")
                <section class="LLP" data-wow-delay="0.3s" >
                    <div class="container">
                      
                      <div class="head_sec text-center">
                        <div class="row align-items-center">
                          <div class="col-lg-10 col-sm-12 text-left">
                            <h2 class="llp-head"  data-aos="fade-up" data-aos-delay="400">Sole proprietorship formation made easy!</h2>
                            <p class="llp-para"  data-aos="fade-up" data-aos-delay="400">Here’s everything you need to know:</p>
                          </div>
                        </div>
                      </div>

                      <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-delay="400" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Eligibility Criteria</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Documents Required</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Process</a>
                        </li>
                      </ul><!-- Tab panes -->
                      <div class="tab-content"  data-aos="fade-up" data-aos-delay="400">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="round_box">
                              <p class="p_rel"> Registration under MSME Act (Udyam) for smooth business operations </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div>
                              <p class="p_rel">PAN card (Mandatory)</p>
                              <p class="p_rel">Photo</p>
                              <p class="p_rel">Address proof</p>
                              <p class="p_rel">Utility bill of the Firm register office</p>
                              <p class="p_rel">Bank details like bank statement, cancelled cheque</p>

                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="steps">
                              <div class="step">
                               <div>
                                  <p><b>Step 1:</b> There is no defined mechanism for registration of a proprietorship firm. The easiest way to register a proprietorship is through Local License / Registration and Tax registration.</p> 
                                  <p><b>Step 2:</b> We will work with the authorities to ensure that all the appropriate forms are properly filled in, and to make sure that you perform your duties in a timely manner. This could vary between 5 and 15 days depending on your situation.</p> 
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </section>
              @elseif(str_replace('-',' ',Request::segment(2))=="limited liability partnership")
                   <section class="LLP" data-wow-delay="0.3s" >
                    <div class="container">
                      
                      <div class="head_sec text-center">
                        <div class="row align-items-center">
                          <div class="col-lg-10 col-sm-12 text-left">
                            <h2 class="llp-head"  data-aos="fade-up" data-aos-delay="400">LLP Incorporation made easy</h2>
                            <p class="llp-para"  data-aos="fade-up" data-aos-delay="400">Here’s everything you need to know:</p>
                          </div>
                        </div>
                      </div>

                      <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-delay="400" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Eligibility Criteria</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Documents Required</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Process</a>
                        </li>
                      </ul><!-- Tab panes -->
                      <div class="tab-content"  data-aos="fade-up" data-aos-delay="400">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                           <div class="round_box">
                            <!-- <p class="p_rel"> Forming an LLP requires at least two partners (no maximum number)</p>
                            <p class="p_rel"> In the case of a body corporate partner, a natural person should be nominated for representation</p>
                            <p class="p_rel"> There is no concept of shared capital, but each partner has to contribute towards capital of LLP</p>
                            <p class="p_rel"> DIN (Director Identification Number) for all the Designated Partners</p>
                            <p class="p_rel"> DSC (Digital Signature Certificate) for all the Designated Partners</p>
                            <p class="p_rel"> Address proof for the office of LLP</p> -->

                            <p class="p_rel">Forming an LLP requires at least two partners (no maximum number)</p>
                            <p class="p_rel">There is no concept of shared capital, but each partner has to contribute towards capital of LLP</p>
                            <p class="p_rel">DIN (Director Identification Number) for  Designated Partners</p>
                            <p class="p_rel">DSC (Digital Signature Certificate) for  Designated Partners</p>

                          </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                           <div>
                              <!-- <p class="p_rel"> Copy of PAN Card of partners</p>
                              <p class="p_rel"> Passport size photograph of partners</p>
                              <p class="p_rel"> Copy of Aadhaar Card/ Voter identity card/ Driver’s license as address proof</p>
                              <p class="p_rel"> Electricity/ Water bill/ Telephone bill/ Latest bank statement as proof of Registered
                              Office (Business Place)</p>
                              <p class="p_rel"> Copy of Sale Deed/Property Deed (If owned property)</p>
                              <p class="p_rel"> Landlord NOC (Format will be provided)</p>
                              <p class="p_rel"> Passport (in case of Foreign Nationals/ NRIs)</p>
                              <p class="p_rel"> Digital Signature Certificate</p>
                              <p class="p_rel"> Copy of Notarized Rental Agreement</p>
                              <p class="p_rel"> Copy of NOC from the property owner</p> -->
                              <p><b>A.</b></p>
                              <p><b>Designated Partner's Documents</b></p>
                              <p class="p_rel">Designated Partner's PAN</p>
                              <p class="p_rel">Designated Partner's ID Proofs</p>
                              <p class="p_rel">Aadhaar Card or Voter ID or Passport or Driver's License</p>
                              <p class="p_rel">Designated Partner's Address Proofs:</p>
                              <p class="p_rel">Latest one month Savings Bank statement or</p>
                              <p class="p_rel">Latest Telephone Bill on his own name or</p>
                              <p class="p_rel">Latest Moblie Bill on his name or</p>
                              <p class="p_rel">Latest Electricity Bill on his own name.</p>
                              <p class="p_rel">Designated Partner's latest passport size photograph</p>
                              <p class="p_rel">Designated Partner's Email ids</p>
                              <p class="p_rel">Designated Partner's Mobile Numbers linked with their Aadhar</p>
                              <p class="p_rel">Incase of Foreign designated partners, International Passport is mandatory</p>
                              <p><b>B.</b></p>
                              <p><b>LLP Documents</b></p>

                              <p class="p_rel">Registered Office Address Proof: Latest Power Bill</p>
                              <p class="p_rel">No-objection letter from the Landlord.</p>
                              <p class="p_rel">Rental Agreement from the landlord if the premises are rented.</p>
                              <p class="p_rel">LLP email id.</p>
                              <p><b>Documents required for partnership firm</b></p>

                              <p class="p_rel">ID and Address Proof of Partners like PAN Card/Passport/Voter ID/Aadhar Card/Driving License Copy of the Partners.</p>
                              <p class="p_rel">One Business Place Address proof :-
                              if Property on Rented :- Need Rent Agreement and NOC from Landlord.
                              if Property is own :- Need Electricity Bills or any other Address Proof.
                              Note : Business place and home place can be same.</p>
                          </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="steps">
                              <div class="step">
                               <div>
                              <!-- <p><b>Step 1:</b> Arrange basic documents of Partners</p> 
                              <p><b>Step 2:</b> Fill in an online form with accurate information</p> 
                              <p><b>Step 3:</b> Apply for Digital Signature and DIN of Partners</p> 
                              <p><b>Step 4:</b> Prepare all legal documents</p> 
                              <p><b>Step 5:</b> Apply to name availability of the proposed LLP</p> 
                              <p><b>Step 6:</b> Verification of all documents and forms by the respective Government dept and authorities</p> 
                              <p><b>Step 7:</b> File Incorporation Docs with ROC</p> 
                              <p><b>Step 8:</b> Get LLP Incorporation Certificate</p>
                              <p><b>Step 9:</b> Drafting of LLP Agreement</p>
                              <p><b>Step 10:</b> Filing of LLP Agreement</p> -->

                            <p><b>Step 1:</b> Wind Up of Company</p>
                            <p><b>Step 2:</b> Dissolution of Company</p>
                            <p><b>Step 3:</b> Process of Winding up and Dissolution of Company</p>
                            <p><b>LLP</b></p>
                            <p><b>Step 1:</b> Striking Off Name of LLP</p>
                            <p><b>Step 2:</b> Procedure for Striking Off Name</p>
                            <p><b>Step 3:</b> Partners Liability After Striking Off</p>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </section>
              @elseif(str_replace('-',' ',Request::segment(2))=="GST return filing")
                     <section class="LLP" data-wow-delay="0.3s" >
                    <div class="container">
                      
                      <div class="head_sec text-center">
                        <div class="row align-items-center">
                          <div class="col-lg-10 col-sm-12 text-left">
                            <h2 class="llp-head"  data-aos="fade-up" data-aos-delay="400">GST Returns made easy</h2>
                            <p class="llp-para"  data-aos="fade-up" data-aos-delay="400">Here’s everything you need to know:</p>
                          </div>
                        </div>
                      </div>

                  <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-delay="400" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Types of GST</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Documents Required</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Process</a>
                      </li>  -->
                    </ul><!-- Tab panes -->
                    <div class="tab-content"  data-aos="fade-up" data-aos-delay="400">
                      <div class="tab-pane active" id="tabs-1" role="tabpanel">
                          <div class="gst_boxs">
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 1</h4></div>
                                <div class="gst_box2"><p>Details of the outward supplies of the taxable goods and or services</p></div>
                                <div class="gst_box3"><p>Monthly Quarterly (If opted under the QRMP scheme) </p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 3B</h4></div>
                                <div class="gst_box2"><p>Summary of the outward supplies along with the input tax credit that is declared and the payment of the tax is affected by the taxpayer.</p></div>
                                <div class="gst_box3"><p>Monthly Quarterly</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>CMP 08</h4></div>
                                <div class="gst_box2"><p>Statement cum challan to make a tax payment by a taxpayer registered under the composition scheme under Section 10 of the CGST Act.</p></div>
                                <div class="gst_box3"><p>Quarterly</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 4</h4></div>
                                <div class="gst_box2"><p>Filed by the taxpayer that is registered under the composition scheme under Section 10 of the CGST Act.</p></div>
                                <div class="gst_box3"><p>Annually</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 5</h4></div>
                                <div class="gst_box2"><p>Filed by a Non-resident taxable person</p></div>
                                <div class="gst_box3"><p>Monthly</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 6</h4></div>
                                <div class="gst_box2"><p>Filed by the input service distributor to distribute the eligible input tax credit.</p></div>
                                <div class="gst_box3"><p>Monthly</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 7</h4></div>
                                <div class="gst_box2"><p>Filed by the government authorities</p></div>
                                <div class="gst_box3"><p>Monthly</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 8</h4></div>
                                <div class="gst_box2"><p>Details of supplies that are affected by the e-commerce operators and the amount of tax that is collected at the source by them.</p></div>
                                <div class="gst_box3"><p>Monthly</p></div>
                              </div>


                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 9</h4></div>
                                <div class="gst_box2"><p>Annual return for a normal taxpayer</p></div>
                                <div class="gst_box3"><p>Annually</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 9C</h4></div>
                                <div class="gst_box2"><p>Certified reconciliation statement</p></div>
                                <div class="gst_box3"><p>Annually</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 10</h4></div>
                                <div class="gst_box2"><p>Is filed by the taxpayer whose GST registration is cancelled</p></div>
                                <div class="gst_box3"><p>Once the GST registration is cancelled or surrendered</p></div>
                              </div>
                              <div class="gst_box">
                                <div class="gst_box1"><h4>GSTR 11</h4></div>
                                <div class="gst_box2"><p>Details of the inward supplies are furnished by a person who has UIN and also claims a refund</p></div>
                                <div class="gst_box3"><p>Monthly</p></div>
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="steps">
                            <div class="step">
                              <div>
                                  <!-- <li>Invoices issued with GSTIN or B2B invoices.</li>
                                  <li>Invoices issued without GSTIN or B2C invoices (only when total value is above ₹2.5 lakhs).</li>
                                  <li>Inter-state sales consolidated</li>
                                  <li>HSN-wise summary of all goods sold.</li>
                                  <li>Any other debit or credit notes or advance receipts</li> -->
                                  <li>Details of sales invoices issued </li>
                                  <li>Details of advance received</li>
                                  <li>Details of Cr note or Dr note issued</li>
                              </div>
                            </div>
                          </div>
                      </div>
                    <!--  <div class="tab-pane" id="tabs-3" role="tabpanel">
                          <div>
                              <p><b>step1:</b> Visit the GST portal – <a href="https://www.gst.gov.in/" target="_blank">www.gst.gov.in</a></p>
                              <p>Go to the E-Way bill generation portal at <a href="https://ewaybill.nic.in/" target="_blank">https://ewaybill.nic.in/ </a> and enter your login details.</p>
                              <p><b>step2:</b> Enter the 15-digit GSTIN (GST Identification Number), issued on the basis of state code and PAN</p>
                              <p><b>step3:</b>Upload the relevant invoices on the GST portal and receive the invoice reference number against each…</p>
                              <p><b>step4:</b> Once all the invoices, inward returns, outward returns, and cumulative monthly returns are uploaded</p>
                          </div>
                      </div> -->
                    </div>
                    </div>
                </section>
              @elseif(str_replace('-',' ',Request::segment(2))=="accounting bookkeeping")
                 <section class="LLP" data-wow-delay="0.3s" >
                    <div class="container">
                      
                      <div class="head_sec text-center">
                        <div class="row align-items-center">
                          <div class="col-lg-10 col-sm-12 text-left">
                            <h2 class="llp-head"  data-aos="fade-up" data-aos-delay="400">Bookkeeping made easy!</h2>
                            <p class="llp-para"  data-aos="fade-up" data-aos-delay="400">Here’s everything you need to know:</p>
                          </div>
                        </div>
                      </div>

                     <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-delay="400" role="tablist">
                    <!--  <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Eligibility Criteria</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-2" role="tab">Services Provided</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Documents Required</a>
                      </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content"  data-aos="fade-up" data-aos-delay="400">
                      <!-- <div class="tab-pane" id="tabs-1" role="tabpanel">
                          <div class="round_box">
                            <p>Some common circumstances for a change in the registered office address could be:</p>
                            <ul>
                              <li>Change within the same village/city</li>
                              <li>Change within the same state</li>
                              <li>Changing from one state to another</li>
                            </ul>
                          </div>
                      </div> -->
                      <div class="tab-pane active" id="tabs-2" role="tabpanel">
                          <div>
                              <ul>
                              <li>Account maintenance with regular updates</li>
                              <li>Accounts payable services</li>
                              <li>Accounts receivable services</li>
                              <li>General ledger services</li>
                              <li>Bank Reconciliation</li>
                              <li>TDS certificates (if TDS has been deducted by other)</li>
                              <li>Tax payment challans (Self-assessment, advance tax, if you have deposited the same)</li>
                              <li>In response to a notice received from the Department of Income Tax – You need the details of Original return/details of notice</li>
                            </ul>
                          </div>
                      </div>
                      <div class="tab-pane" id="tabs-3" role="tabpanel">
                          <div class="steps">
                            <div class="step">
                              <div>
                                  <li>Company / Business Incorporation Documents</li>
                                  <li>Bank statement of a financial year or monthly statement (with remarks)</li>
                                  <li>Purchase-Sales invoices, if any</li>
                                  <li>Expense bills, if any</li>
                                  <li>Any receivable and payable detail</li>
                                  <li>Any other Government registration taken</li>
                                  <li>Cash Expenses</li>
                                  <li>Bank Statement of partner/ members with remarks if used for business transactions</li>
                                  <li>Expenses made for company or LLP registration by promoters</li>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    </div>
                </section>
              @endif
@section('scripts')

@endsection
@endsection