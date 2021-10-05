@extends('layouts.app')
@section('content')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="register-box ml-auto mr-auto pt-3 pb-3">
        <div class="card">
            <div class="card-body register-card-body">
                <h2 class="login-box-msg">Register a new supporter</h2>
                <form method="post" action="{{ route('register-supporter') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="country">Country</label>
                    <div class="input-group mb-3">
                        <select class="form form-control" name="country" id="country">
                            {{--                            <option value="USA">USA</option>--}}
                            {{--                            <option value="Russia">Russia</option>--}}
                            <option value="Киргизстан">Киргизстан</option>
                        </select>
                        <div class="input-group-append">
                        </div>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label for="region">Region</label>
                    <div class="input-group mb-3">
                        <select name="region"
                                id="regionSelect"
                                class="form-control">
                        </select>
                        @error('region')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label for="TIK">TIK</label>
                    <div class="input-group mb-3">
                        <select name="TIK" id="TIK" class="form-control">
                            <option value="24">Баткен</option>
                            <option value="10">Баткен городской</option>
                            <option value="25">Кадамжай</option>
                            <option value="26">Кызыл-Кыя</option>
                            <option value="23">Лейлек</option>
                            <option value="31">Сүлүктү</option>
                        </select>
                        </select>
                        @error('TIK')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label for="YIK">YIK</label>
                    <div class="input-group mb-3">
                        <select name="YIK" id="YIK" class="form-control">
                            <option value="8055 С. РАВАТ., СШ С. РАВАТ">8055 С. РАВАТ., СШ С. РАВАТ</option>
                            <option value="8056 С. АКТАТЫР, СШ ИМ.Т.САДЫКОВА">8056 С. АКТАТЫР, СШ ИМ.Т.САДЫКОВА</option>
                            <option value="8057 С. ЖАҢЫ-БАК, СШ ИМ К.ТАГАЕВА">8057 С. ЖАҢЫ-БАК, СШ ИМ К.ТАГАЕВА</option>
                            <option value="8058 С. САМАРКАНДЕК, СШ ОРТО-САЙ">8058 С. САМАРКАНДЕК, СШ ОРТО-САЙ</option>
                            <option value="8059 С. САМАРКАНДЕК, СШ ИМ М. САЛИХОВА">8059 С. САМАРКАНДЕК, СШ ИМ М.
                                САЛИХОВА
                            </option>
                            <option value="8060 С. ПАСКЫ-АРЫК, СШ ИМ МУСА КАДЫРА">8060 С. ПАСКЫ-АРЫК, СШ ИМ МУСА КАДЫРА
                            </option>
                            <option value="8061 С. ОРТО-БОЗ, СШ ИМ Ж. МОМУНОВА">8061 С. ОРТО-БОЗ, СШ ИМ Ж. МОМУНОВА
                            </option>
                            <option value="8062 С. УЧ-ДОБО, НАЧ. ШК. УЧ-ДОБО">8062 С. УЧ-ДОБО, НАЧ. ШК. УЧ-ДОБО</option>
                            <option value="8063 С. КӨК-ТАШ, СШ ИМ Ш.ГАНЫ">8063 С. КӨК-ТАШ, СШ ИМ Ш.ГАНЫ</option>
                            <option value="8064 С. АКСАЙ, СШ ИМ Б.ХОДЖАЕВА">8064 С. АКСАЙ, СШ ИМ Б.ХОДЖАЕВА</option>
                            <option value="8065 С. КАРА-БАК, НАЧ. ШК. ИМ. Б.БАЙНАЗАРОВА">8065 С. КАРА-БАК, НАЧ. ШК. ИМ.
                                Б.БАЙНАЗАРОВА
                            </option>
                            <option value="8066 С. КАРА-БАК, НАРОДНЫЙ КЛУБ КАРА-БАК">8066 С. КАРА-БАК, НАРОДНЫЙ КЛУБ
                                КАРА-БАК
                            </option>
                            <option value="8067 С. ЧЕТ-КЫЗЫЛ, СШ ИМ С.МОМУНОВА">8067 С. ЧЕТ-КЫЗЫЛ, СШ ИМ С.МОМУНОВА
                            </option>
                            <option value="8068 С. ЗАРДАЛЫ, НАЧ ШК С.НАЖИМИДИНОВА">8068 С. ЗАРДАЛЫ, НАЧ ШК
                                С.НАЖИМИДИНОВА
                            </option>
                            <option value="8069 С. КЫЗЫЛ-БЕЛ, СШ ИМ А.МАСАЛИЕВА">8069 С. КЫЗЫЛ-БЕЛ, СШ ИМ А.МАСАЛИЕВА
                            </option>
                            <option value="8070 С. ДОСТУК, СШ ДОСТУК">8070 С. ДОСТУК, СШ ДОСТУК</option>
                            <option value="8076 С. БУЖУМ, СШ ИМ Ш.ТОКСОНОВА">8076 С. БУЖУМ, СШ ИМ Ш.ТОКСОНОВА</option>
                            <option value="8077 С. БУЖУМ, СШ БУЖУМ">8077 С. БУЖУМ, СШ БУЖУМ</option>
                            <option value="8078 С. КАРА-БУЛАК, СШ ИМ С. ЭРМАТОВА">8078 С. КАРА-БУЛАК, СШ ИМ С. ЭРМАТОВА
                            </option>
                            <option value="8079 С. ЖАҢЫ-ЖЕР, НАРОДНЫЙ КЛУБ «ЖАНЫ-ЖЕР»">8079 С. ЖАҢЫ-ЖЕР, НАРОДНЫЙ КЛУБ
                                «ЖАНЫ-ЖЕР»
                            </option>
                            <option value="8080 С. ЧЕК, НАРОДНЫЙ КЛУБ ЧЕК">8080 С. ЧЕК, НАРОДНЫЙ КЛУБ ЧЕК
                            </option>
                            <option value="8081 С. КАН, СШ ИМ З.ОРМОНОВА">8081 С. КАН, СШ ИМ З.ОРМОНОВА</option>
                            <option value="8082 С. ЖАҢЫРЫК, СШ ИМ. Ж.ЭРКЕБАЕВА">8082 С. ЖАҢЫРЫК, СШ ИМ. Ж.ЭРКЕБАЕВА
                            </option>
                            <option value="8083 С. КАЙЫҢДЫ, НАРОДНЫЙ КЛУБ КАЙЫНДЫ">8083 С. КАЙЫҢДЫ, НАРОДНЫЙ КЛУБ
                                КАЙЫНДЫ
                            </option>
                            <option value="8084 С. ЧОҢ-ТАЛАА, А/О ТӨРТ-ГҮЛ">8084 С. ЧОҢ-ТАЛАА, А/О ТӨРТ-ГҮЛ
                            </option>
                            <option value="8085 С. ЧОҢ-КАРА, СШ ИМ ТОКТОГУЛА">8085 С. ЧОҢ-КАРА, СШ ИМ ТОКТОГУЛА</option>
                            <option value="8086 С. ЗАРТАШ, СШ ИМ Ж.БАЙЖИГИТОВА">8086 С. ЗАРТАШ, СШ ИМ Ж.БАЙЖИГИТОВА
                            </option>
                            <option value="8087 С. АК-ТУРПАК, НАРОДНЫЙ КЛУБ «АК-ТУРПАК»">8087 С. АК-ТУРПАК, НАРОДНЫЙ
                                КЛУБ «АК-ТУРПАК»
                            </option>
                            <option value="8088 С. БОЗ-АДЫР, НАРДНЫЙ КЛУБ БОЗ-АДЫР">8088 С. БОЗ-АДЫР, НАРДНЫЙ КЛУБ
                                БОЗ-АДЫР
                            </option>
                            <option value="8089 С. КАРА-ТОКОЙ, СШ ИМ Б.МЕГРЕНОВА">8089 С. КАРА-ТОКОЙ, СШ ИМ Б.МЕГРЕНОВА
                            </option>
                            <option value="8090 С. АПКАН, СШ ИМ А.ЖОРОБАЕВА">8090 С. АПКАН, СШ ИМ А.ЖОРОБАЕВА</option>
                            <option value="8091 С. БӨЖӨЙ, СШ ИМ К.АБДУРАИМОВА">8091 С. БӨЖӨЙ, СШ ИМ К.АБДУРАИМОВА
                            </option>
                            <option value="8092 С. АЙГҮЛ-ТАШ, НАЧ ШК АЙГУЛ-ТАШ">8092 С. АЙГҮЛ-ТАШ, НАЧ ШК АЙГУЛ-ТАШ
                            </option>
                            <option value="8093 С. ГАЗ, СШ ГАЗ">8093 С. ГАЗ, СШ ГАЗ</option>
                            <option value="8094 С. СОГМЕНТ, СШ ИМ Э.ЭРКЕБАЕВА">8094 С. СОГМЕНТ, СШ ИМ Э.ЭРКЕБАЕВА
                            </option>
                            <option value="8095 С. ЧАРБАК, СШ ИМ А.ТОПЧУЕВА">8095 С. ЧАРБАК, СШ ИМ А.ТОПЧУЕВА</option>
                            <option value="8096 С. ТАЯН, АЙЫЛ ӨКМӨТҮ КЫШТУТ">8096 С. ТАЯН, АЙЫЛ ӨКМӨТҮ КЫШТУТ
                            </option>
                            <option value="8097 С. КЫШТУТ, СШ КЫШТУТ">8097 С. КЫШТУТ, СШ КЫШТУТ</option>
                            <option value="8098 С. САЙ, СШ ИМ Д.АКМАТОВА">8098 С. САЙ, СШ ИМ Д.АКМАТОВА</option>
                            <option value="8179 С. БУЖУМ, ДС.«ЫНТЫМАК»">8179 С. БУЖУМ, ДС.«ЫНТЫМАК»</option>
                            <option value="8180 С. ДОБО, НАЧ ШК ДОБО">8180 С. ДОБО, НАЧ ШК ДОБО</option>
                            <option value="8186 С. МИҢ-ӨРУК, НЕПОЛ СШ ИМ Б.ГАИПОВА">8186 С. МИҢ-ӨРУК, НЕПОЛ СШ ИМ
                                Б.ГАИПОВА
                            </option>
                            <option value="8197 С. КЫЗЫЛ-БЕЛ, СШ ИМ. К.ТУРМАМАТОВА">8197 С. КЫЗЫЛ-БЕЛ, СШ ИМ.
                                К.ТУРМАМАТОВА
                            </option>
                            <option value="8198 С. ТАШ-ТУМШУК, НЕПОЛ. СШ ТАШ-ТУШУК">8198 С. ТАШ-ТУМШУК, НЕПОЛ. СШ
                                ТАШ-ТУШУК
                            </option>
                            <option value="8210 С. ЧЕК, ЗДАНИЕ СШ ЧЕК">8210 С. ЧЕК, ЗДАНИЕ СШ ЧЕК</option>
                            <option value="8211 С. КАРА-БАК, СШ ИМ. БОТО НАРМАТОВА">8211 С. КАРА-БАК, СШ ИМ. БОТО
                                НАРМАТОВА
                            </option>
                        </select>
                        @error('YIK')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text"
                               name="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}"
                               placeholder="Name">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>Surname</label>
                    <div class="input-group mb-3">
                        <input type="text"
                               name="surname"
                               class="form-control @error('surname') is-invalid @enderror"
                               value="{{ old('surname') }}"
                               placeholder="Surname">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>Patronymic</label>
                    <div class="input-group mb-3">
                        <input type="text"
                               name="patronymic"
                               class="form-control @error('patronymic') is-invalid @enderror"
                               value="{{ old('patronymic') }}"
                               placeholder="Patronymic">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                        @error('patronymic')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>Phone(WhatsApp)</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="phone" id="phone"
                               value="{{ old('phone') }}"
                               class="form-control @error('phone') is-invalid @enderror"
                               placeholder="Phone">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-phone"></span></div>
                        </div>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>Referral link</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="referral_link"
                               value="{{ old('referral_link') }}"
                               class="form-control @error('referral_link') is-invalid @enderror"
                               placeholder="Referral link">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-link"></span></div>
                        </div>
                        @error('referral_link')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>Residence address</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="residence_address"
                               value="{{ old('residence_address') }}"
                               class="form-control @error('residence_address') is-invalid @enderror"
                               placeholder="Residence address">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-map"></span></div>
                        </div>
                        @error('residence_address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>INN</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="INN"
                               value="{{ old('INN') }}"
                               class="form-control @error('INN') is-invalid @enderror"
                               placeholder="INN">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                        @error('INN')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="passport_series">Passport series</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="passport_series"
                               value="{{ old('passport_series') }}"
                               class="form-control @error('passport_series') is-invalid @enderror"
                               placeholder="Passport series">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-passport"></span></div>
                        </div>
                        @error('passport_series')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="passport_number">Passport number</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="passport_number"
                               value="{{ old('passport_number') }}"
                               class="form-control @error('passport_number') is-invalid @enderror"
                               placeholder="Passport number">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-passport"></span></div>
                        </div>
                        @error('passport_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label>Passport date</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="passport_date"
                               value="{{ old('passport_date') }}"
                               class="form-control @error('passport_date') is-invalid @enderror"
                               placeholder="Passport date">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-passport"></span></div>
                        </div>
                        @error('passport_date')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="passport_face_photo">the front side of the passport</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="file"
                               name="passport_face_photo"
                               class="@error('passport_face_photo') is-invalid @enderror"
                               value="{{ old('passport_face_photo') }}">
                        <div class="input-group-append">
                        </div>
                        @error('passport_face_photo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="passport_residence_address">registration address in the passport</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="file"
                               name="passport_residence_address"
                               class="@error('passport_residence_address') is-invalid @enderror"
                               value="{{ old('passport_residence_address') }}">
                        <div class="input-group-append">
                        </div>
                        @error('passport_residence_address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
