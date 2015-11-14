<?php include('functions.php'); head("angular"); ?>
<!-- go crazy on this bro! -->
<div class="row outer-wrap" ng-controller="peopleController">
  <div class="small-12 inner-wrap">
    <div class="row result">
  <div class="column small-12" style="border:5px solid red; border-left:none; border-right:none;">
    <div class="row">
      <div class="column small-12 medium-6 large-4">
        <h1>first name</h1>
        <h5>last name</h5>
        <ul>
          <li>ip:</li>
          <li>longetude:</li>
          <li>latitude:</li>
          <li>occupation:</li>
        </ul>
      </div>
      <div class="column small-12 medium-6 large-8">
        <p>bio paragraph And you know, another great guy is Mark Cuban. And I think, you know, he's been talking about maybe doing this himself. And I think he'd do a great job. We don't have the exact same feelings about where we're going, but that's okay. But Mark was great. You know, he called me, like, literally a few days ago, and he said, "You know, if you want to use the arena" -- which by the way is a beautiful arena this a great arena -- and Dirk is a fantastic player he's just a wonderful player -- and the Mavericks have been fantastic and it's just a great team -- but he said, "You know, if you want to use the arena." And I said, "Mark, when?" He said "How 'bout Monday night?" </p>
      </div>
    </div>
    </div>
  </div><!-- end result -->
  
  <div class="row">
    <form>
      <div class="column small-12 medium-6">
      <input type="text" name="" placeholder="search anything" ng-model="search.$"/>
      </div>
      <div class="column small-12 medium-6">
      <input type="checkbox" name="" ng-true-value="M" ng-model="search.gender" />
      </div>
    </form>
  </div><!-- emd form -->
  <div class="row">
  <div class="column small-12 medium-10 medium-centered large-8 outline">
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Occupation</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="p in people | filter:search:strict">
        <td>{{ p.id }}</td>
        <td>{{ p.name.first }}</td>
        <td>{{ p.name.last }}</td>
        <td>{{ p.occupation }}</td>
        <td>{{ p.phone }}</td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
  </div>
</div>
















<!-- whoa slow down your at the end, arn't ou? -->
<?php footer(); ?>