@extends('Layout.clientLayout')
@section('title', 'Thiết bị vệ sinh cao cấp chính hãng')
@section('content')


<img src="{{ asset('Client/assets/images/slider/kv_img.png') }}" width="100%" alt="" />
<div id="corporatePage" class="page corporate">
    <main class="corporate_main">
        <div class="corporate_body">
            <section class="coporate_section">
                <div class="corporate_section_ttl">
                    <h2 class="corporate_section_ttl_txt">Corporate Profile</h2>
                    <time class="corporate_section_ttl_time">(as of March 31, 2023)</time>
                </div>
                <div class="corporate_detail">
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">Company Name</dt>
                        <dd class="corporate_detail_block_txt">TOTO LTD.</dd>
                    </dl>
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">Establishment</dt>
                        <dd class="corporate_detail_block_txt">May 15, 1917</dd>
                    </dl>
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">Capytal</dt>
                        <dd class="corporate_detail_block_txt">¥35,579 milion</dd>
                    </dl>
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">
                            Main Businesses</br>
                            <span class="corporate_detail_block_ttl_note">*Product availability will depend onthe regional market</span>
                        </dt>
                        <dd class="corporate__detail__block__txt">@lang('messages.more')</dd>
                    </dl>
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">Representative Directors</dt>
                        <dd class="corporate_detail_block_txt">
                            Representative Director, Chairman of the Board<br>
                            Madoka Kitamura<br>
                            President, Representative Director<br>
                            Noriaki Kiyota<br>
                            Representative Director, Executive Vice President<br>
                            Satoshi Shirakawa
                        </dd>
                    </dl>
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">Number of consolidated employees</dt>
                        <dd class="corporate_detail_block_txt">Consolidated: 36,188<br>(as of March 31, 2023)</dd>
                    </dl>
                    <dl class="corporate_detail_block">
                        <dt class="corporate_detail_block_ttl">Headquarters</dt>
                        <dd class="corporate_detail_block_txt">1-1, Nakashima 2-chome, Kokurakita-ku, Kitakyushu,Fukuoka, 802-8601 Japan</dd>
                    </dl>
                    <dl class="corporate_detail_block">

                    </dl>
                </div>
            </section>
            <section class="coporate_section">
                <div class="corporate_section_ttl">
                    <h2 class="corporate_section_ttl_txt">Overseas Group Companies</h2>
                </div>
                <div class="coporate_group">
                    <div class="coporate_group_block">
                        <dl class="coporate_group_item">
                            <dt class="coporate_group_item_ttl">Asia</dt>
                            <dd class="coporate_group_item_txt js-toggle></dd>
                        </dl>
                    </div>
                </div>
            </section>
            <section class="coporate_section">

            </section>
            <section class="coporate_section">

            </section>
        </div>
    </main>
</div>

@endsection