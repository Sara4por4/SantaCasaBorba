<form class="form form--contacts" action="{{url('contacts')}}" method="post">
    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('status'))
            <div class="alert alert-success">
                <p>{{session('status')}}</p>
            </div>

        @endif

        {!! csrf_field() !!}

        <div class="form-group col-xs-12">
            <label for="name">Nome*</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
        </div>

        <div class="form-group col-xs-12 col-sm-6">
            <label for="contact">Contacto</label>
            <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact">
        </div>

        <div class="form-group col-xs-12 col-sm-6">
            <label for="email">Email*</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email">
        </div>

        <div class="form-group col-xs-12">
            <label for="address">Assunto*</label>
            <input type="text" name="subject" value="{{old('subject')}}" class="form-control" id="address">
        </div>

        <div class="form-group col-xs-12">
            <label class="textarea" for="message">Mensagem*</label>
            <textarea class="form-control" id="message" name="message" rows="4">{{old('message')}}</textarea>
        </div>

        <div class="form-group col-xs-12">
           @include('front.components.rgpd')
        </div>

    </div>

    <div class="form__footer row">
        <div class="col-xs-6 text-left">
            <span class="tip">*Campos obrigatórios</span>
        </div>
        <div class="col-xs-6 text-right">
            <button type="submit" name="button" class="btn"><span class="icon icon--send"></span>Enviar</button>
        </div>
    </div>
</form>
