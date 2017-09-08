<div class="row discussion-row">
    <div id="gaugechart{{$discussion->id}}" class="col-lg-2 col-sm-3 text-right text-right">
        <div class="metric" data-ratio="{{$discussion->getRatio()}}" onclick="toggleCharts({{$discussion->id}})">
            <svg viewBox="0 0 1000 500">
                <path d="M 950 500 A 450 450 0 0 0 50 500"></path>
                <text class='percentage' text-anchor="middle" alignment-baseline="middle" x="500" y="300" font-size="140" font-weight="bold">10/10</text>
                <text class='swing' text-anchor="middle" alignment-baseline="middle" x="500" y="450" font-size="90" font-weight="normal">Balanced</text>
            </svg>
        </div>
    </div>
    <div id="votebreakdown{{$discussion->id}}" class="col-lg-2 col-sm-3 text-right text-right votebreakdownholder" style="display:none;">
        <div class="metricbreakdown" onclick="toggleCharts({{$discussion->id}})">
            <div class="chartholder">
                <ul class="chart">
                    <li class="bar very" style="height: 30%;" title="Very Left">
                        <div class="percent">VL</div>
                        <div class="balancemet"></div>
                    </li>
                    <li class="bar medium" style="height: 10%;" title="Left">
                        <div class="percent">L</div>
                        <div class="balancemet"></div>
                    </li>
                    <li class="bar centre" style="height: 40%;" title="Centre">
                        <div class="percent">C</div>
                        <div class="balancemet"></div>
                    </li>
                    <li class="bar medium" style="height: 15%;" title="Right">
                        <div class="percent">R</div>
                        <div class="balancemet"></div>
                    </li>
                    <li class="bar very" style="height: 5%;" title="Very Right">
                        <div class="percent">VR</div>
                        <div class="balancemet"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-10  col-sm-9">
        <h2><a class="discussionsrc" href="{{$discussion->url}}">{{$discussion->title}}</a></h2> &nbsp;&nbsp;&nbsp;&nbsp; ({{$discussion->hostDomain()}})
        <br> submitted {{$discussion->timeSincePost()}} ago by <a class="discussionposter" href="#">{{$discussion->poster()}}</a>
        <br> <b><a class="commentlink" href="{{ url('comments/'.$discussion->id.'/') }}">{{$discussion->commentCount()}} comments</a>       share</b> </div>
</div>