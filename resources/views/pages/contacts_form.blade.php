<style>
    span.input-group-addon {
        min-width: 28%;
        text-align: left;
    }
</style>
<div class="container">
    <p>
        or Email us with the form below
        <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#contacts_form">
            <i class="fa fa-expand"></i></button>
    </p>
    <div id="contacts_form" class="collapse">
        <br>
        <form method="POST" action="/contacts" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class=" col-md-4">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <span class="input-group-addon"><strong>Your Name:<star>*</star></strong></span>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <br>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <span class="input-group-addon"><strong>Your Email:<star>*</star></strong></span>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <span class="input-group-addon"><strong>Your Message:<star>*</star></strong></span>
                        <textarea rows="4" class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="col-md-2">
                    <p><sub>*required fields</sub></p>
                    <button type="submit" class="btn btn-secondary text-right">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

