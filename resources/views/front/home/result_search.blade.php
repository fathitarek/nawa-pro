@if($result['developers'] != '') 
<div class="location-search">
                                <h4>Developers</h4>
                                
                                @foreach($result['developers'] as $developer)
                                <p>{{ $developer['name'] }}
                                    <span>{{ $result['search'] }}</span>
                                </p>
                                @endforeach
                                
                                
    
    
                            </div>
 @endif
    @if($result['properties'] != '') 
                            <div class="brokers-search">
                                <h4>Properties</h4>
                               @foreach($result['properties'] as $property)
                               <p><a href='{{ route('property-view-details',['title' => $property['title']]) }}'>{{ $property['title'] }}</a>
                                    <span>{{ $result['search'] }}</span>
                                </p>
                                @endforeach
                               
    
                            </div>
    @endif
    @if($result['brokers'] != '') 
                            <div class="developers-search">
                                <h4>Brokers</h4>
                                @foreach($result['brokers'] as $broker)
                                <p>{{ $broker['name'] }}
                                    <span>{{ $result['search'] }}</span>
                                </p>
                                @endforeach
    
    
                            </div>
    @endif