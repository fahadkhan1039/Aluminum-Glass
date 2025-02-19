#ZOTEC FRAME FRAMEWORKS

#DATABASE Builder
https://cycle-orm.dev/docs/database-query-builders/current/en#quick-inserts

#Insert Builder

To get an instance of InsertBuilder (responsible for insertions), we have to execute following code:


```
$insert = $db->insert('test');
```
Now we can add some values to our builder to be inserted into related table:

```
$insert = $db->insert('test');

$insert->values([
    'time_created' => new \DateTime(),
    'name'         => 'Anton',
    'email'        => 'test@email.com',
    'balance'      => 800.90
]);
```

#Batch Insert
You add as many values into insert builder as your database can support:

```
$insert->columns([
    'time_created', 
    'name', 
    'email', 
    'balance'
]);

for ($i = 0; $i < 20; $i++) {
    // we don't need to specify key names in this case
    $insert->values([
        new \DateTime(),
        $this->faker->randomNumber(2),
        $this->faker->email,
        $this->faker->randomFloat(2)
    ]);
}

$insert->run();
```

#Quick Inserts
You can skip InsertQuery creation by talking to your table directly:

```
$table = $db->table('test');

print_r($table->insertOne([
    'time_created' => new \DateTime(),
    'name'         => 'Anton',
    'email'        => 'test@email.com',
    'balance'      => 800.90
]));
```

#SelectQuery Builder
SelectQuery builder can be retrieved two very similar ways, you can either get it from database or from table instances:

```
$select = $db->table('test')->select();

// alternative
$select = $db->select()->from('test');

// alternative
$select = $db->test->select();
```
#Select Columns
By default, SelectQuery selects every column (*) from its related table. We can always change the set of requested columns using the columns method.

```
$db->users->select()
    ->columns('name')
    ->fetchAll();
```
You can use your select query as proper iterator or use run method which will return instance of Cycle\Database\Statement:

```
foreach($select->getIterator() as $row) {
    print_r($row);
}
```
To select all values as array use fetchAll:

```
foreach($select->fetchAll() as $row) {
    print_r($row);
}
```
You can always view what SQL is generated by your query by dumping it or via method sqlStatement:

```
print_r(
    $db->users->select()
        ->columns('name')
        ->sqlStatement()
);
```
#Where Statements
Add WHERE conditions to your query using where, andWhere, orWhere methods.

#Basics
Let's add simple condition on status column of our table:

```
$select = $db->select()
    ->from('test')
    ->columns(['id', 'status', 'name']);

$select->where('status', '=', 'active');

foreach ($select as $row) {
    print_r($row);
}
```
```
SELECT `id`,
       `status`,
       `name`
FROM `primary_test`
WHERE `status` = 'active'        
```
Note that prepared statements used behind the scenes.

You can skip '=' in your conditions:

```
$select->where('status', 'active');
Image
#Where Operators
Second argument can be used to declare operator:

```
$select->where('id', '>', 10);
$select->where('status', 'like', 'active');
Image
For between and not between conditions you can also use forth argument of where method:

```
$select->where('id', 'between', 10, 20);
```
Resulted SQL:

```
SELECT `id`,
       `status`,
       `name`
FROM `primary_test`
WHERE `id` BETWEEN 10 AND 20  
```
#Multiple Where Conditions
Chain multiple where conditions using fluent calls:

```
$select
    ->where('id', 1)
    ->where('status', 'active');
```
Method andWhere is an alias for where, so we can rewrite such condition to make it more readable:

```
$select
    ->where('id', 1)
    ->andWhere('status', 'active');
```
Resulted SQL:

```
SELECT `id`,
       `status`,
       `name`
FROM `primary_test`
WHERE `id` = 1
  AND `status` = 'active'
```
SelectQuery will generate SQL based respecting your operator order and boolean operators:

```
$select
    ->where('id', 1)
    ->orWhere('id', 2)
    ->orWhere('status', 'active');
```
```
SELECT `id`,
       `status`,
       `name`
FROM `primary_test`
WHERE `id` = 1
   OR `id` = 2
   OR `status` = 'active'
```

#Tracy For Debugging

The Tracy Bar is a floating panel. It is displayed in the bottom right corner of a page. You can move it using the mouse. It will remember its position after the page reloading.




#INTERVENTION/IMAGE
```
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(['driver' => 'imagick']);

// to finally create image instances
$image = $manager->make('public/foo.jpg')->resize(300, 200);
```