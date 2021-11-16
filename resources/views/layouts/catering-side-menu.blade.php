<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper">
        <a class="left-sidebar-toggle" href="#">Menu</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements" style="margin-top: 81px;">
                        <li class="<?=($option == 'breakfast') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/breakfast') }}"> <span>BREAKFAST</span></a></li>
                        <li class="<?=($option == 'tea') ? 'active-first' : '' ?> mt-3"><a href="{{ url('/catering/tea') }}"> &nbsp;<span>AM/PM TEA</span></a></li>
                        @if($option == 'tea')
                        <li class="<?=($option == 'tea') ? 'active-first' : '' ?> mt-1 main-option"><a href="javascript:void(0);"> &nbsp;<span class="additional">ADDITIONAL OPTIONS</span></a></li>
                        @endif
                        
                        <li class="<?=($option == 'lunch') ? 'active-first' : '' ?> mt-3"><a href="{{ url('/catering/lunch') }}"><span>LUNCH</span></a></li>
                        @if($option == 'lunch')
                        <li class="<?=($option == 'lunch') ? 'active-first' : '' ?> mt-1 main-option"><a href="javascript:void(0);"> &nbsp;<span class="additional">ADDITIONAL OPTIONS</span></a></li>
                        @endif
                        <li class="<?=($option == 'dinner') ? 'active-first' : '' ?> mt-3"><a href="{{ url('/catering/dinner') }}"> &nbsp;<span>DINNER</span></a></li>
                        @if($option == 'dinner')
                        <li class="<?=($option == 'dinner') ? 'active-first' : '' ?> mt-1 main-option"><a href="javascript:void(0);"> &nbsp;<span class="additional">ADDITIONAL OPTIONS</span></a></li>
                        @endif
                        <li class="<?=($option == 'island') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/more/island') }}"> <span>ISLAND</span></a></li>
                        <li class="<?=($option == 'graze') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/more/graze') }}"> <span>GRAZE</span></a></li>
                        <li class="<?=($option == 'funeral') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/more/funeral') }}"> <span>FUNERAL</span></a></li>
                        <li class="<?=($option == 'high-tea') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/more/high-tea') }}"> <span>HIGH TEA</span></a></li>
                        <li class="<?=($option == 'patters') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/more/patters') }}"> <span>PATTERS</span></a></li>
                        <li class="<?=($option == 'xmas-themed') ? 'active-first' : '' ?> mt-3"><a href="{{ url('catering/more/xmas-themed') }}"> <span>XMAS THEMED</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="back-section">
                <a href="{{ url('/') }}"><i class="fa fa-angle-left" style="margin-left: 27px; color: black;"></i> &nbsp;&nbsp; <span class="" style="font-size: 17px; color: black;">BACK</span></a> 
            </div>
        </div>
    </div>
</div>
