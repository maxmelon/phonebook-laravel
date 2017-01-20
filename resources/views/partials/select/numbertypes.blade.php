@if(isset($phoneNumber))

    <option @if($phoneNumber->type == 'home') selected @endif>home</option>
    <option @if($phoneNumber->type == 'work') selected @endif>work</option>
    <option @if($phoneNumber->type == 'mobile') selected @endif>mobile</option>
    <option @if($phoneNumber->type == 'home fax') selected @endif>home fax</option>
    <option @if($phoneNumber->type == 'work fax') selected @endif>work fax</option>
    <option @if($phoneNumber->type == 'other') selected @endif>other</option>

@else

    <option>home</option>
    <option>work</option>
    <option>mobile</option>
    <option>home fax</option>
    <option>work fax</option>
    <option>other</option>

@endif