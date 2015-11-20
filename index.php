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
            <p>bio paragraph And you know, another great guy is Mark Cuban. And I think, you know, he's been talking about maybe doing this himself. And I think he'd do a great job. We don't have the exact same feelings about where we're going, but that's
              okay. But Mark was great. You know, he called me, like, literally a few days ago, and he said, "You know, if you want to use the arena" -- which by the way is a beautiful arena this a great arena -- and Dirk is a fantastic player he's just
              a wonderful player -- and the Mavericks have been fantastic and it's just a great team -- but he said, "You know, if you want to use the arena." And I said, "Mark, when?" He said "How 'bout Monday night?" </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end result -->

    <div class="row">
      <form>
        <div class="column small-12 medium-6">
          <fieldset>
            <label class="inline-block">Strict Search:</label>
            </label><input type="checkbox" name="strict" ng-model="strict"/>
            <legend>Text search</legend>
          <input type="text" name="anything" placeholder="search anything" ng-hide="strict" ng-model="search.$" />
          <input type="text" name="fname" placeholder="search first name" ng-model="search.name.first"/>
          <input type="text" name="lname" placeholder="search last name" ng-model="search.name.last"/>
          </fieldset>
        </div>
        <div class="column small-12 medium-6">
          <fieldset>
            <legend>Gender/Frequency</legend>
            <radiogroup>
              <span class="inline-block">
                <label class="inline-block" for="m">M</label>
                <input id="m" type="radio" name="gender" value="M" ng-model="search.gender"/>
                </span>
              <span class="inline-block">
                <label class="inline-block" for="f">F</label>
                <input id="f" type="radio" name="gender" value="F" ng-model="search.gender"/>
                </span>
            </radiogroup>
            <checkboxgroup>
              <span class="inline-block">
                <label class="inline-block" for="once">Once</label>
                <input type="checkbox" id="once" name="frequencyOnce" ng-true-value="Once" ng-model="search.frequency"/>
              </span>
              <span class="inline-block">
                <label class="inline-block" for="daily">Daily</label>
                <input type="checkbox" id="daily" name="frequencyDaily" ng-true-value="Daily" ng-model="search.frequency"/>
              </span>
              <span class="inline-block">
                <label class="inline-block" for="weekly">Weekly</label>
                <input type="checkbox" id="weekly" name="frequencyWeekly" ng-true-value="Weekly" ng-model="search.frequency"/>
              </span>
              <span class="inline-block">
                <label class="inline-block" for="monthly">Monthly</label>
                <input type="checkbox" id="monthly" name="frequencyMonthly" ng-true-value="Monthly" ng-model="search.frequency"/>
              </span>
              <span class="inline-block">
                <label class="inline-block" for="yearly">Yearly</label>
                <input type="checkbox" id="yearly" name="frequencyYearly" ng-true-value="Yearly" ng-model="search.frequency"/>
              </span>
            </checkboxgroup>
          </fieldset>
          <fieldset>
            <legend>Occupation</legend>
              <select name="occupation" id="" ng-model="search.occupation">
                <option value="" ng-form="occupation">Select occupation</option>
                <option ng-repeat="o in occupation" value="{{ o }}" ng-form="occupation">{{ o }}</option>
              </select>
          </fieldset>
        </div>
      </form>
      <div class="column small-12">
        <ul class="small-block-grid-26 alphabet">
          <li><label for="A">A</label><input type="radio" name="lname_search" id="A" value="A" ng-model="search.name.last" /></li>
          <li><label for="B">B</label><input type="radio" name="lname_search" id="B" value="B" ng-model="search.name.last" /></li>
          <li><label for="C">C</label><input type="radio" name="lname_search" id="C" value="C" ng-model="search.name.last" /></li>
          <li><label for="D">D</label><input type="radio" name="lname_search" id="D" value="D" ng-model="search.name.last" /></li>
          <li><label for="E">E</label><input type="radio" name="lname_search" id="E" value="E" ng-model="search.name.last" /></li>
          <li><label for="F">F</label><input type="radio" name="lname_search" id="F" value="F" ng-model="search.name.last" /></li>
          <li><label for="G">G</label><input type="radio" name="lname_search" id="G" value="G" ng-model="search.name.last" /></li>
          <li><label for="H">H</label><input type="radio" name="lname_search" id="H" value="H" ng-model="search.name.last" /></li>
          <li><label for="I">I</label><input type="radio" name="lname_search" id="I" value="I" ng-model="search.name.last" /></li>
          <li><label for="J">J</label><input type="radio" name="lname_search" id="J" value="J" ng-model="search.name.last" /></li>
          <li><label for="K">K</label><input type="radio" name="lname_search" id="K" value="K" ng-model="search.name.last" /></li>
          <li><label for="L">L</label><input type="radio" name="lname_search" id="L" value="L" ng-model="search.name.last" /></li>
          <li><label for="M">M</label><input type="radio" name="lname_search" id="M" value="M" ng-model="search.name.last" /></li>
          <li><label for="N">N</label><input type="radio" name="lname_search" id="N" value="N" ng-model="search.name.last" /></li>
          <li><label for="O">O</label><input type="radio" name="lname_search" id="O" value="O" ng-model="search.name.last" /></li>
          <li><label for="P">P</label><input type="radio" name="lname_search" id="P" value="P" ng-model="search.name.last" /></li>
          <li><label for="Q">Q</label><input type="radio" name="lname_search" id="Q" value="Q" ng-model="search.name.last" /></li>
          <li><label for="R">R</label><input type="radio" name="lname_search" id="R" value="R" ng-model="search.name.last" /></li>
          <li><label for="S">S</label><input type="radio" name="lname_search" id="S" value="S" ng-model="search.name.last" /></li>
          <li><label for="T">T</label><input type="radio" name="lname_search" id="T" value="T" ng-model="search.name.last" /></li>
          <li><label for="U">U</label><input type="radio" name="lname_search" id="U" value="U" ng-model="search.name.last" /></li>
          <li><label for="V">V</label><input type="radio" name="lname_search" id="V" value="V" ng-model="search.name.last" /></li>
          <li><label for="W">W</label><input type="radio" name="lname_search" id="W" value="W" ng-model="search.name.last" /></li>
          <li><label for="X">X</label><input type="radio" name="lname_search" id="X" value="X" ng-model="search.name.last" /></li>
          <li><label for="Y">Y</label><input type="radio" name="lname_search" id="Y" value="Y" ng-model="search.name.last" /></li>
          <li><label for="Z">Z</label><input type="radio" name="lname_search" id="Z" value="Z" ng-model="search.name.last" /></li>
        </ul>
      </div>
    </div>
    <!-- emd form -->
    <div class="row">
      <div class="column small-12 medium-10 medium-centered large-9">
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th><a ng-click="sortType = 'name.first' ; sortReverse = !sortReverse" href="#">First Name</a>
              <i ng-show="sortType == 'name.first'" class="fa" ng-class="sortReverse ? 'fa-caret-up' : 'fa-caret-down'"></i>
              </th>
              <th><a ng-click="sortType = 'name.last' ; sortReverse = !sortReverse" href="#">Last Name</a>
              <i ng-show="sortType == 'name.last'" class="fa" ng-class="sortReverse ? 'fa-caret-up' : 'fa-caret-down'"></i>
              </th>
              <th><a ng-click="sortType = 'gender' ; sortReverse = !sortReverse" href="#">Gender</a>
              <i ng-show="sortType == 'gender'" class="fa" ng-class="sortReverse ? 'fa-caret-up' : 'fa-caret-down'"></i>
              </th>
              <th><a ng-click="sortType = 'occupation' ; sortReverse = !sortReverse" href="#">Occupation</a>
              <i ng-show="sortType == 'occupation'" class="fa" ng-class="sortReverse ? 'fa-caret-up' : 'fa-caret-down'"></i>
              </th>
              <th><a ng-click="sortType = 'phone' ; sortReverse = !sortReverse" href="#">Phone</a>
              <i ng-show="sortType == 'phone'" class="fa" ng-class="sortReverse ? 'fa-caret-up' : 'fa-caret-down'"></i>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="p in people | orderBy:sortType:sortReverse | filter:search:strict | limitTo:300">
              <td>{{ p.id }}</td>
              <td>{{ p.name.first }}</td>
              <td>{{ p.name.last }}</td>
              <td>{{ p.gender }}</td>
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