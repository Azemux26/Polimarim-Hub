@extends('layouts.app')
@section('content')
    <!-- BERITA TERPOPULER -->
    <section class="container-fluid">
        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card text-white border-0 shadow-sm">
                        <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img w-100" style="filter:brightness(50%);" alt="...">
                        <div class="card-img-overlay">
                            <a href="news.html" class="badge badge-primary mb-2">Audit</a>
                            <a href="#" class="badge badge-secondary">Pelantikan</a>
                            <a href="#" class="badge badge-success">Populer</a>
                            <a href="#" class="badge badge-danger">Hot</a>
                            <h3 class="card-title judul-berita">
                                <a href="show_news.html" class="text-white">Pelantikan Taruna/i Baru TA. 2020/2021, Catar/i
                                    merasa bahagia
                                    sekali dan menjadi yang terbarik sehingga terjadi</a>
                            </h3>
                            <small class="card-text"><i class="far fa-calendar"></i> 20 Agustus 2020</small>
                        </div>
                    </div>
                    <p class="text-justify text-secondary mt-3 font-weight-light">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Ad incidunt quia nemo sint earum quisquam, modi et esse unde distinctio? Tempora hic
                        exercitationem
                        voluptate illo eius, quia aperiam aliquam unde?
                        Perspiciatis labore tempore provident corrupti omnis numquam eos id aliquid vitae quisquam, ratione
                        inventore
                        totam quod quis sed quae, nihil in saepe possimus, minus atque praesentium sapiente cum reiciendis.
                        Error.
                        Delectus, architecto! Eaque quod tenetur odio eum ea ex veniam accusamus cumque numquam? Dignissimos
                        excepturi
                        eligendi officiis repellat porro repudiandae praesentium. Consequatur doloribus totam iste similique
                        voluptatibus repellendus dicta eligendi.
                        Assumenda, rerum animi, aliquid dicta aliquam obcaecati minus molestiae porro eaque excepturi natus
                        inventore
                        minima omnis? Eaque, commodi! Dolor repellat nulla aperiam eum quam! Aut rem quisquam rerum a
                        ducimus.
                        <i class="fas fa-quote-left fa-2x fa-pull-left"></i>Animi similique necessitatibus, ipsa quod nulla
                        quis ex
                        rerum praesentium eaque quae? Suscipit sequi animi pariatur praesentium, voluptatum, ab expedita
                        architecto
                        nostrum quis illum laboriosam repellendus voluptate veniam aliquam nobis!
                        <!--i class="fas fa-quote-right fa-2x fa-pull-right"></i-->
                        Quasi, delectus accusantium? Molestiae a asperiores porro soluta id beatae et incidunt
                        necessitatibus velit
                        deserunt. Minima optio repellat ea nulla, neque culpa vero error, laboriosam earum aliquid ipsum
                        molestiae
                        suscipit.
                        Nemo qui itaque perspiciatis? Magni itaque laudantium, nisi id placeat sunt perferendis? Ea enim,
                        laboriosam
                        distinctio cumque provident tempora eos consequuntur saepe minima quis sunt vel commodi, aspernatur,
                        deserunt
                        cum?
                        Atque, autem laboriosam! Voluptatibus repudiandae dolorum rem veritatis eligendi eius harum enim
                        voluptates,
                        odit animi laborum sunt voluptate rerum placeat suscipit quasi. Dolorem esse odit nam ex neque
                        beatae dolorum.
                        Eligendi ea labore ipsam dolor soluta similique, sed obcaecati eaque veniam delectus fuga beatae
                        eius ipsum
                        magnam atque at nesciunt voluptatibus a quo numquam veritatis dignissimos possimus aut quod! Eius.
                        <i class="fas fa-quote-left fa-2x fa-pull-left"></i>Illum architecto rem accusantium! Beatae esse,
                        ex corrupti
                        nemo perferendis illo. Odit nesciunt magni nam quae quas accusantium, facere soluta voluptatum,
                        architecto ea
                        animi neque. Tempore sit nesciunt ipsam at.
                        Incidunt aspernatur minima iusto voluptatem, ullam ad? Ad eum, dolores obcaecati quibusdam dolorem
                        esse
                        consequatur sapiente blanditiis nemo officiis, illo sed neque. Corporis adipisci similique quisquam
                        numquam ea
                        in consequatur?
                        Dolores, consequuntur recusandae quis nisi vel fugiat nostrum, iusto, impedit unde placeat
                        reprehenderit
                        architecto laboriosam sint quae laudantium quo dignissimos expedita atque. Distinctio ad, deserunt
                        alias quae
                        officiis voluptates hic?
                        Pariatur, dolorem voluptatibus nesciunt at consequuntur placeat aut nisi doloremque assumenda quidem
                        corrupti
                        fugit fugiat deserunt molestiae consequatur hic, necessitatibus tenetur, excepturi magni ea est vel?
                        Earum,
                        neque enim? Aliquid?
                        Laudantium magnam, obcaecati odit nisi pariatur beatae nemo culpa sed dolores enim perspiciatis,
                        assumenda iure
                        quisquam architecto consequatur commodi numquam tempora, impedit adipisci expedita. Distinctio non
                        neque
                        eligendi dolores voluptatem!
                        Quisquam minus nesciunt consequuntur in perspiciatis quidem, minima suscipit quasi. Voluptatum
                        veniam esse
                        numquam ipsam deserunt totam cum rem. Placeat doloribus sint nam. Minus est mollitia deserunt
                        reprehenderit
                        repellat. Illum!
                    </p>
                    <hr>
                    <form class="text-secondary">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">5 Komentar</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan komentar Anda."></textarea>
                        </div>
                        <div class="text-left">
                            <button type="button" class="btn btn-primary rounded-lg">Berkomentar</button>
                        </div>
                    </form>
                    <div class="media mt-3 text-secondary">
                        <img src="{{asset('img/blog-author 21.png')}}" class="mr-3" width="50px" height="50px" alt="...">
                        <div class="media-body">
                            Mantap jiwa, semangat jaya polimarim. <br>
                            <small class="mt-0 text-secondary"><svg width="1.2em" height="1.2em" viewBox="0 0 16 16"
                                    class="bi mb-1 bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                        d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                </svg> <a href="#" class="text-secondary">Author</a> <svg width="1em"
                                    height="1em" viewBox="0 0 16 16" class="bi mb-1 bi-calendar-event-fill"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                                </svg> 19 Agustus 2020 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"
                                    class="bi mb-1 bi-reply-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L9.079 4.1A.716.716 0 0 0 8 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z" />
                                </svg> <a href="#" class="text-secondary">Balas komentar.</a></small>
                            <div class="garis-komentar"></div>
                            <div class="garis-komentar-1"></div>
                            <div class="media mt-3">
                                <a class="mr-3" href="#">
                                    <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="50px" height="50px"
                                        alt="...">
                                </a>
                                <div class="media-body">

                                    Mantap jiwa boorrrrr! <br>
                                    <small class="mt-0 text-secondary"><svg width="1.2em" height="1.2em"
                                            viewBox="0 0 16 16" class="bi mb-1 bi-person-circle" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            <path fill-rule="evenodd"
                                                d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                        </svg> <a href="#" class="text-secondary">Author</a> <svg width="1em"
                                            height="1em" viewBox="0 0 16 16" class="bi mb-1 bi-calendar-event-fill"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                                        </svg> 19 Agustus 2020 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"
                                            class="bi mb-1 bi-reply-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L9.079 4.1A.716.716 0 0 0 8 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z" />
                                        </svg> <a href="#" class="text-secondary">Balas komentar.</a></small>
                                </div>
                                <div class="garis-komentar-2"></div>
                            </div>
                            <div class="media mt-3">
                                <a class="mr-3" href="#">
                                    <img src="{{asset('img/blog-author 21.png')}}" class="rounded-circle" width="50px"
                                        height="50px" alt="...">
                                </a>
                                <div class="media-body">
                                    Semangat polimarim, jaya selalu dilaut dan udara, mantap.. <br>
                                    <small class="mt-0 text-secondary"><svg width="1.2em" height="1.2em"
                                            viewBox="0 0 16 16" class="bi mb-1 bi-person-circle" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            <path fill-rule="evenodd"
                                                d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                        </svg> <a href="#" class="text-secondary">Author</a> <svg width="1em"
                                            height="1em" viewBox="0 0 16 16" class="bi mb-1 bi-calendar-event-fill"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                                        </svg> 19 Agustus 2020 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"
                                            class="bi mb-1 bi-reply-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L9.079 4.1A.716.716 0 0 0 8 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z" />
                                        </svg> <a href="#" class="text-secondary">Balas komentar.</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-3 text-secondary">
                        <img src="{{asset('img/blog-author 21.png')}}" class="mr-3" width="50px" height="50px" alt="...">
                        <div class="media-body">
                            Selamat pagi, maw tanya apakah dipolimarim sudah approval dan menyelenggarakan diklat kepelautan
                            yang bisa
                            diikuti, terimakasih. <br><small class="mt-0 text-secondary"><svg width="1.2em"
                                    height="1.2em" viewBox="0 0 16 16" class="bi mb-1 bi-person-circle"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                        d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                </svg> <a href="#" class="text-secondary">Author</a> <svg width="1em"
                                    height="1em" viewBox="0 0 16 16" class="bi mb-1 bi-calendar-event-fill"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                                </svg> 19 Agustus 2020 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"
                                    class="mb-1 bi bi-reply-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L9.079 4.1A.716.716 0 0 0 8 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z" />
                                </svg> <a href="#" class="text-secondary">Balas komentar.</a></small>
                            <div class="garis-komentar"></div>
                            <div class="garis-komentar-1"></div>
                            <div class="media mt-3">
                                <a class="mr-3" href="#">
                                    <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="50px"
                                        height="50px" alt="...">
                                </a>
                                <div class="media-body">
                                    Selamat pagi, salam sehat selalu polimarim sekarang sudah bisa melakukan diklat
                                    keterampilan pelaut loh
                                    <br>
                                    <small class="mt-0 text-secondary"><i class="fas fa-user-circle"></i> <a
                                            href="#" class="text-secondary">Author</a> <svg width="1em"
                                            height="1em" viewBox="0 0 16 16" class="bi mb-1 bi-calendar-event-fill"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                                        </svg> 19 Agustus 2020 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"
                                            class="mb-1 bi bi-reply-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L9.079 4.1A.716.716 0 0 0 8 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z" />
                                        </svg> <a href="#" class="text-secondary">Balas komentar.</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Berita terkait lainnya.</h5>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natural</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natura</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natura</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natura</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natural</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natura</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natura</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#"><img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid"
                                        alt="..."></a>
                                <div class="card-body">
                                    <a href="#" class="text-dark">
                                        <h5 class="card-title">Judul berita terkeren dan terupdate</h5>
                                    </a>
                                    <!-- <a href="#" class="text-dark text-decoration-none"><p class="card-text">This is a wider card with supporting text below as a natura</p></a> -->
                                    <p class="card-text"><small class="text-muted">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi mb-1 bi-clock" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg> Last updated 3 mins ago, Author</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BERITA TERPOPULER -->
@endsection
