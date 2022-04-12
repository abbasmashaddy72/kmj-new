@extends('layouts.front_end_layout')
@section('content')
    <section class="relative">

        <!-- Background image -->
        <div class="absolute inset-0 h-128 pt-16 box-content">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="{{ asset('images/karbala-bg.jpg') }}"
                width="1440" height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    <article>

                        <!-- Article header -->
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1 class="h1 text-amber-500 mb-4" data-aos="fade-down">Imam Hussain (as) and Yazid's
                                    letter
                                </h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down"
                                    data-aos-delay="150">After examining all of the facts involved, it becomes very clear
                                    that Imam Husayn was fully aware of his situation. Because he was the grandson of
                                    Prophet Muhammad and the spiritual leader of the community, and Yazid was a drunkard,
                                    womanizer, and cold‑blooded murderer, the Imam had no choice but to stand up to the
                                    unjust Umayyad Dynasty..</p>
                            </div>
                        </header>
                        <hr class="mb-4">

                        <!-- Article content -->
                        <div class="text-lg text-gray-600 dark:text-gray-400" data-aos="fade-up" data-aos-delay="450">
                            <p class="mb-8">
                                <span class="font-medium text-amber-500 dark:text-amber-400">"The Imam even mentioned that
                                    if
                                    everyone were to pay allegiance to Yazid, “Say goodbye to Islam.”</span>
                                <br>
                                There can be no doubt that the Imam knew that if he had paid allegiance to a drunkard who
                                was not qualified for leadership, the Islamic Nation would have fallen apart. That is why
                                the Imam made it very clear to everyone that his mission was to save the pure principles of
                                Islam and fight against the evil people who try to destroy its purity. The Imam’s acute
                                awareness of the political and social situation at that time is clear from his many sayings
                                to the people and his sermons. Many times people tried to convince the Imam not to go to
                                Kufah, but he always refused, even though he knew he would be killed. Also, on several
                                occasions when the Imam’s camp was faced with a military confrontation, Imam Husayn refused
                                the requests of his people to initiate a battle and kill the enemy. The Imam refused and
                                chose to avoid bloodshed by any means possible. Furthermore, the Imam repeatedly insisted
                                upon his followers to leave and save their own lives. So, we can see that the Imam was not
                                being manipulated by forces out of his control. As a matter of fact, he was conscious of
                                every decision he made and he always thought carefully before making any decision, because
                                his main concern was to preserve the pure spirituality of the Islamic Nation. In short, the
                                Imam knew that the people did not fully understand how evil Yazid was, and he knew that the
                                only way to awaken the people was by showing them how far Yazid would go to stay in power
                                that he would even spill the blood of the grandson of Prophet Muhammad. In fact, the
                                martyrdom of Imam Husayn marked the beginning of the end of the Umayyad dynasty.

                            </p>
                    </article>

                </div>

            </div>
        </div>
    </section>
@endsection
