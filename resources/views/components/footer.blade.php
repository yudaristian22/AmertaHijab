<footer class="mt-5 footer">
    <div class="p-5 text-white footer-top bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <h4 class="fw-bold">{{ $contacts->name }}</h4>
                    <strong>Phone</strong> : <span> {{ $contacts->telepon }}</span>
                    <br />
                    <strong>Email</strong> :
                    <span> {{ $contacts->email }}</span>
                </div>
                <div class="col-md-2">
                    <h4 class="fw-bold">Collections</h4>
                    <ul class="list-group list-unstyled">
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Hijab</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Abaya</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Rok</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Gamis</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4 class="fw-bold">Information</h4>
                    <ul class="list-group list-unstyled">
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Terms & Conditions</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">About Us</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Privacy</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Shop Address</a>
                        </li>
                        <li class="list-item">
                            <a href="" class="text-white text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-bold">Join Our Newsletter</h4>
                    <p>Get detailed information from us, starting from upcoming events, promo updates & discounts by
                        subscribing.</p>
                    <div class="mb-3 input-group">
                        <input type="text" class="form-control" placeholder="yourmail@example.com" />
                        <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-5 py-3 text-white footer-down bg-darker">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="copyright">
                        &copy; Copyright <strong>Amerta Hijab</strong>. All Rights Reserved
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="social-links float-end">
                        <a href="https://www.tiktok.com/@amertahijab" class="mx-2">
                            <i class="text-white fab fa-tiktok fa-2x"></i>
                        </a>
                        <a href="https://www.facebook.com/AmertaHijab/" class="mx-2">
                            <i class="text-white fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/amerta_hijab" class="mx-2">
                            <i class="text-white fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=628533385123&text&type=phone_number&app_absent=0"
                            class="mx-2">
                            <i class="text-white fab fa-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
