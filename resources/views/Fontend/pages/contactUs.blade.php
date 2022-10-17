
 @extends('Fontend.LayoutInner.master')

 @section('contned')

 <!--------------about banner--------------->

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>যোগাযোগ</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->

<!------faunded-------->

<!-----contact us page------>
<section id="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="address-contact allBranceAddress text-center">
                    <h5>Main Branch</h5>
                     <h6>1/A, New Baily Road, Dhaka- 1000</h6>
                     <p>Phone: 02-58310500</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="address-contact allBranceAddress text-center">
                    <h5>Dhanmondi Branch</h5>
                     <h6>House # 06, Road # 08, Dhanmondi Residential Area, Dhanmondi, Dhaka.</h6>
                     <p>Phone: 02-9668080</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="address-contact allBranceAddress text-center">
                    <h5>Azimpur Branch</h5>
                     <h6>101, Pilkhana Road, Azimpur, Dhaka.</h6>
                     <p>Phone: 02-9666359</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="address-contact allBranceAddress text-center">
                    <h5>Bashundhara Branch</h5>
                     <h6>Block # F, 181/A, Bashundhara Residential Area, Bashundhara, Dhaka.</h6>
                     <p>Phone: 02-55037424</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------contact information-------------->
<section id="conform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contactlist text-center">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Mobile No.">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="message">
                            <textarea name="" id="" placeholder="Message"></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------contact map--------------->
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.730753882817!2d90.39124987656126!3d23.734346659814705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b84e57c2368d%3A0x4df20dee9b73140e!2sViqarunnisa%20Noon%20School%20and%20College!5e0!3m2!1sen!2sbd!4v1594903414526!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----contact us page------>


@endsection
