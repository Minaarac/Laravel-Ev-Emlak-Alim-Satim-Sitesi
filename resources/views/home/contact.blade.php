@extends('layouts.home')

@section('title', 'Contact-' .  $setting->title)

@section('description') {{ $setting->description }} @endsection

@section('keywords',$setting->keywords)


@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Blank Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li> <a href="#"> </a> Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aa-error">
        <div class="container">
            <row>
               <div class="col-md-8">
                   <h3 class="asside-title"> İletişim Bilgileri </h3>

                   {!! $setting->contact !!}

               </div>


                <div class="col-md-4">
                    <h3 class="asside-title">  İletişim Formu </h3>
                    @include('home.message')

                    <div class="aa-contact-form">
                        <form class="contactform" action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <p class="comment-form-name">
                                <label for="name">Name&Surname <span class="required">*</span></label>
                                <input type="text" name="name" value="" size="20" required="required">
                            </p>

                            <p class="comment-form-phone">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <input type="phone" name="phone" value="" aria-required="true" required="required">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" name="email" value="" aria-required="true" required="required">
                            </p>
                            <p class="comment-form-url">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject">
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Message</label>
                                <textarea class="input"  name="message" cols="45" rows="5" placeholder="Your Message"></textarea>
                            </p>
                            <p class="form-submit">
                                <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">
                            </p>
                        </form>
                    </div>



                </div>

                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h4> </h4>

                    </div>
                </div>
            </row>
        </div>
    </section>


@endsection
