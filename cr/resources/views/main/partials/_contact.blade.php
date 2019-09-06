    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="{{ url('contact') }}" method="POST">

                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="message-input">
                                <textarea cols="30" rows="10" name="bmessage" placeholder="Message"></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
