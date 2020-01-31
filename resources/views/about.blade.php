@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <div
        style="background-image: url({{ asset('images/dallas_skyline_2_updated_web.png') }}); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <img style="margin-top: 4%; margin-left: 5%; width: 15%;
  max-width: 400px;
  min-width: 90px;
  cursor:pointer;
  height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html" onclick="window.location.href = '/';">
        <div class="row" style="margin: 50px auto; margin-top: 35%;">
            <div class="col-md-8 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 29px;
                font-weight: 900;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">WHO WE ARE
                </div>
                <div style="
                margin-top: 25px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 21px;
                font-weight: 300;">
                    <span style="
                font-weight: 900;">We’re the financial partner you’ve always wanted on your team. </span>
                    We have a combined 60 years of experience helping entrepreneurs build and grow; we’ve lent over 6
                    million dollars to fund working capital needs. Obstacles? Complications? You name it, we’ve seen it
                    - and overcome it. We love forming long-term relationships with growing companies; we especially
                    love getting to know you, your goals, and your needs. We’ll support your success as long as you need
                    us.
                </div>
            </div>
        </div>
        <div class="row" style="margin: 50px auto;">
            <div class="col-md-8 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 29px;
                font-weight: 900;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">WHAT WE DO
                </div>
                <div style="
                margin-top: 25px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 21px;
                font-weight: 300;">
                    Do you need working capital to grow? Have outstanding invoices you'd love to get paid off today, not
                    in 30 or 60 days? We factor accounts receivables and provide lines of credit for growing companies.
                    <span style="font-weight: 900;">We’ll be there to help you grow and scale; we’ll be there when you need advice or an introduction; and when there are problems, we strive to be your first call.</span>
                    We’ll always tell you the truth−good news and bad news−and share everything that informs our
                    decision making.
                </div>
            </div>
        </div>
        <div class="row" style="margin: 50px auto;">
            <div class="col-md-8 mx-auto" style="padding: 50px 40px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 29px;
                font-weight: 900;
                line-height: 30px;
                text-transform: uppercase;
                letter-spacing: 0.87px;">WHY WE DO IT
                </div>
                <div style="
                margin-top: 25px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 21px;
                font-weight: 300;">
                    <span style="font-weight: 900;">We’re really good at it! We’ve grown thousands of companies, most of whom have worked with us for years. And we know what it takes.</span>
                    We’ve seen that successful businesses are built from a giving mindset, by courageous entrepreneurs
                    who know their vulnerabilities, own their failures, and turn both into their biggest strengths.
                    We've seen that the best measure of long-term success is in how a business treats its smallest
                    partner. In giving, entrepreneurs foster trust and build relationships. When they dare to grow, we
                    can provide the financial platform and trusted partnership they need to build the future that
                    achieves their goals.
                </div>
            </div>
        </div>
        <div style="
            color: #6e748e;
            font-family: 'Nunito', sans-serif;
            font-size: 46px;
            font-weight: 400;
            line-height: 60px;
            text-transform: uppercase;
            letter-spacing: 3.45px;margin-top: 125px; text-align: center">MEET OUR MANAGEMENT
        </div>
        <div class="row justify-content-center mr-0 ml-0">
            <div class="col-md-4" style="padding: 50px 40px;
            margin: 50px 15px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
                <img src="{{ asset('storage/avatars/cole-harmonson.png') }}">
                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 28px;
                line-height: 25px;
                margin-top: 15px;
                font-weight: 900;
                display: inline-block;
                letter-spacing: 0.84px;">COLE HARMONSON<br>
                    <span style="font-weight: 400;letter-spacing: 0.84px;">co-founder and CEO</span>
                </div>
                <div style="margin-top: 5px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 18px;
                font-weight: 400;">From the very beginning of his career, Cole has recognized the transformative value
                    of factoring and asset-based lending to manage cashflow for growing companies without impacting
                    equity. In 1996, he founded State Bank’s factoring and asset based lending business; when they sold
                    their business in 2007, Cole took the leap into entrepreneurship and founded Far West Capital, which
                    had a successful bank exit in 2018 after supporting hundreds of companies’ growth.
                </div>
                <a href="mailto:cole@darebizcapital.com" style="color: #3a888b;">Email Cole here</a>, or give him a call
                at <a href="tel:1-512-886-3272" style="color: #3a888b;">512-886-DARE x 102</a>
            </div>
            <div class="col-md-4" style="padding: 50px 40px;
            margin: 50px 15px;
box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);
border-radius: 4px;
background-color: #ffffff;">
                <img src="{{ asset('storage/avatars/debra-zukonik.png') }}">
                <div style="
                color: #3a888b;
                font-family: 'Nunito', sans-serif;
                font-size: 28px;
                line-height: 25px;
                margin-top: 15px;
                font-weight: 900;
                display: inline-block;
                letter-spacing: 0.84px;">DEBRA ZUKONIK<br>
                    <span style="font-weight: 400;letter-spacing: 0.84px;">co-founder and CCO</span>
                </div>
                <div style="margin-top: 5px;
                color: #011f4b;
                font-family: 'Nunito', sans-serif;
                font-size: 18px;
                font-weight: 400;">Debra Zukonik is a well-known and respected leader in factoring and asset-based
                    lending, with over 30 years’ experience. Her risk-management expertise is unparalleled in the
                    working capital industry. Prior to joining Dare Capital as Chief Credit Officer, she was the
                    President and Partner of Vertex Financial, a leading Texas-based factor, from 2001 to 2017, and
                    served as Chief Credit Officer of BAMFi
                    from 2017 to 2019.
                </div>
                <a href="mailto:debra@darebizcapital.com" style="color: #3a888b;">Email Debra here</a>, or give her a
                call at <a href="tel:1-214-329-9922" style="color: #3a888b;">512-886-DARE x 102</a>
            </div>
        </div>
        @include('includes.visit-blog')
        @include('includes.get-started')
        @include('includes.footer')
    </div>
@endsection
