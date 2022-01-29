<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
    <div class="container">
        <div class="row d-flex no-gutters align-items-stretch	consult-wrap">
            <div class="col-md-5 wrap-about align-items-stretch d-flex">
                <div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
                    <h2 class="heading-white mb-4">Envie d'en savoir plus ?</h2>
                    <form action="{{ route('renseignement.store') }}" id="quoteForm" class="appointment-form ftco-animate">
                        @csrf
                        @method('POST')
                    <!-- Nom -->
                    <div class="form-group">
                        <input type="text" name="nom_user" class="form-control" placeholder="Nom">
                    </div>
                    <!-- Prénom -->
                    <div class="form-group">
                        <input type="text" name="prenom_user" class="form-control" placeholder="Prénom(s)">
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                        <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <!-- Spécialités -->
                <select name="spec_rens" id="" class="form-control">
                    <option value="">Choisir une spécialité</option>
                    <option value="INFO">INFO</option>
                    <option value="EIT">EIT</option>
                    <option value="EAI">EAI</option>
                    <option value="PMSI">PMSI</option>
                    <option value="MA">MA</option>
                    <option value="STA">STA</option>
                </select>
                </div>
                </div>
                    </div>
                    <!-- Téléphone -->
                    <div class="form-group">
                        <input type="text" name="tel_user" class="form-control" placeholder="Téléphone">
                    </div>
                    <!-- Message -->
                    <div class="form-group">
                <textarea name="message_rens" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
            </div>
            <!-- Bouton soumettre -->
            <div class="form-group">
                <input type="submit" value="Soumettre votre requête" class="btn btn-secondary py-3 px-4">
            </div>
                </form>
                </div>
            </div>
            <div class="col-md-7 wrap-about ftco-animate align-items-stretch d-flex">
                <div class="bg-white p-5">
                    <h2 class="mb-4">Un aperçu<br>de nos filières</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services">
                                <div class="icon mt-2 d-flex align-items-center"><span class="flaticon-insurance"></span></div>
                                <div class="text media-body">
                                    <h3>STIC</h3>
                                    <p>
                                        Sciences et Technologies de l'Information et de la Communication
                                    </p>
                                </div>
                            </div>
                            <div class="services">
                                <div class="icon mt-2"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>STGI</h3>
                                    <p>
                                        Sciences et Technologies du Génie Industriel
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services">
                                <div class="icon mt-2"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>STGP</h3>
                                    <p>
                                        Sciences et Technologies du Génie des Procédés
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
