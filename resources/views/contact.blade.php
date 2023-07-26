<section class="ftco-section">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class=" heading-section text-white">Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 ">
                <div class="wrapper">
                    <div class="row justify-content-center">

                        <div class="col-lg-8">
                            <div class="contact-wrap">
                                @if ($messagecontact!="ok")
                                <div  id="form-message-warning" class="alert alert-success mb-4 w-100 text-center">
                                    {{$messagecontact}}
                                </div>
                                @endif


                                <form method="POST" action="{{route('buania.contact')}}" id="contactForm" name="contactForm" >

                                    @csrf
                                    @method("post")
                                    <div class="row">
                                        <div class="col-md-12  my-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="@lang('public.name')">
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12  my-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="objet" id="subject" placeholder="@lang('public.subject')">
                                            </div>
                                        </div>
                                        <div class="col-md-12  my-2">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12  my-2 text-center">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" style="background-color: #d01f19" class="btn text-white">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

