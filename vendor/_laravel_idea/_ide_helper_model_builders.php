<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Query\Expression;
    
    /**
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method int insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Closure|\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(array|string $column)
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|Builder|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::raw
     * @method Expression raw($value)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::average
     * @method mixed average(string $column)
     * @see \Illuminate\Database\Query\Builder::whereFullText
     * @method $this whereFullText(string|string[] $columns, string $value, array $options = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method int|mixed sum(string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkMap
     * @method $this chunkMap(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::min
     * @method mixed min(string $column)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method $this unless($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyByIdDesc
     * @method $this lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyById
     * @method $this lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Closure|\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(...$groups)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereFullText
     * @method $this orWhereFullText(string|string[] $columns, string $value, array $options = [])
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::dd
     * @method never dd()
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereBetweenColumns
     * @method $this orWhereBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::applyBeforeQueryCallbacks
     * @method $this applyBeforeQueryCallbacks()
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method bool doesntExist()
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method int count(string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns
     * @method $this orWhereNotBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method $this flushMacros()
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::whereBetweenColumns
     * @method $this whereBetweenColumns(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::cleanBindings
     * @method $this cleanBindings(array $bindings)
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method mixed avg(string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::castBinding
     * @method $this castBinding($value)
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(string $column, array $values)
     * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
     * @method $this explain()
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array|mixed $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array|mixed $column)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method $this when($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::beforeQuery
     * @method $this beforeQuery(callable $callback)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(string $column, null|string $operator = null, null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(\Closure|Builder|\Illuminate\Database\Query\Builder|Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazy
     * @method $this lazy(int $chunkSize = 1000)
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::max
     * @method mixed max(string $column)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(Expression|string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method bool exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method ConnectionInterface getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::updateFrom
     * @method $this updateFrom(array $values)
     * @see \Illuminate\Database\Query\Builder::crossJoinSub
     * @method $this crossJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::whereNotBetweenColumns
     * @method $this whereNotBetweenColumns(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method int insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(Expression|string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method bool insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(\Closure|\Illuminate\Database\Query\Builder|Expression|null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dump
     * @method \Illuminate\Database\Query\Builder dump()
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method string toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(string $column, null|string $operator = null, null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method array getBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     */
    class _BaseBuilder extends Builder {}
    
    /**
     * @method \Illuminate\Support\Collection mapWithKeys(callable $callback)
     * @method \Illuminate\Support\Collection partition(callable|string $key, $operator = null, $value = null)
     * @method \Illuminate\Support\Collection mapInto(string $class)
     * @method \Illuminate\Support\Collection mapToGroups(callable $callback)
     * @method \Illuminate\Support\Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
     * @method \Illuminate\Support\Collection pluck(array|string $value, null|string $key = null)
     * @method \Illuminate\Support\Collection pad(int $size, $value)
     * @method \Illuminate\Support\Collection countBy(callable|string $countBy = null)
     * @method \Illuminate\Support\Collection flatMap(callable $callback)
     * @method \Illuminate\Support\Collection mapSpread(callable $callback)
     * @method \Illuminate\Support\Collection zip(array $items)
     * @method \Illuminate\Support\Collection map(callable $callback)
     * @method \Illuminate\Support\Collection split(int $numberOfGroups)
     * @method \Illuminate\Support\Collection combine($values)
     * @method \Illuminate\Support\Collection mapToDictionary(callable $callback)
     * @method \Illuminate\Support\Collection keys()
     * @method \Illuminate\Support\Collection transform(callable $callback)
     * @method \Illuminate\Support\Collection collapse()
     */
    class _BaseCollection extends \Illuminate\Database\Eloquent\Collection {}
}

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Post;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Post|null getOrPut($key, $value)
     * @method Post|$this shift(int $count = 1)
     * @method Post|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Post|$this pop(int $count = 1)
     * @method Post|null pull($key, $default = null)
     * @method Post|null last(callable $callback = null, $default = null)
     * @method Post|$this random(int|null $number = null)
     * @method Post|null sole($key = null, $operator = null, $value = null)
     * @method Post|null get($key, $default = null)
     * @method Post|null first(callable $callback = null, $default = null)
     * @method Post|null firstWhere(string $key, $operator = null, $value = null)
     * @method Post|null find($key, $default = null)
     * @method Post[] all()
     * @property-read _IH_Post_CP $keyBy
     * @property-read _IH_Post_CP $partition
     * @property-read _IH_Post_CP $max
     * @property-read _IH_Post_CP $doesntContain
     * @property-read _IH_Post_CP $flatMap
     * @property-read _IH_Post_CP $each
     * @property-read _IH_Post_CP $map
     * @property-read _IH_Post_CP $filter
     * @property-read _IH_Post_CP $unique
     * @property-read _IH_Post_CP $groupBy
     * @property-read _IH_Post_CP $sortBy
     * @property-read _IH_Post_CP $contains
     * @property-read _IH_Post_CP $sum
     * @property-read _IH_Post_CP $until
     * @property-read _IH_Post_CP $every
     * @property-read _IH_Post_CP $average
     * @property-read _IH_Post_CP $some
     * @property-read _IH_Post_CP $skipWhile
     * @property-read _IH_Post_CP $sortByDesc
     * @property-read _IH_Post_CP $takeUntil
     * @property-read _IH_Post_CP $avg
     * @property-read _IH_Post_CP $skipUntil
     * @property-read _IH_Post_CP $first
     * @property-read _IH_Post_CP $takeWhile
     * @property-read _IH_Post_CP $min
     * @property-read _IH_Post_CP $reject
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Post[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Post baseSole(array|string $columns = ['*'])
     * @method Post create(array $attributes = [])
     * @method _IH_Post_C|Post[] cursor()
     * @method Post|null|_IH_Post_C|Post[] find($id, array $columns = ['*'])
     * @method _IH_Post_C|Post[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrFail($id, array $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrNew($id, array $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Post firstOrCreate(array $attributes = [], array $values = [])
     * @method Post firstOrFail(array $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method _IH_Post_C|Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] hydrate(array $items)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Post[]|_IH_Post_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post sole(array|string $columns = ['*'])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Post_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     * @property-read _IH_User_CP $keyBy
     * @property-read _IH_User_CP $partition
     * @property-read _IH_User_CP $max
     * @property-read _IH_User_CP $doesntContain
     * @property-read _IH_User_CP $flatMap
     * @property-read _IH_User_CP $each
     * @property-read _IH_User_CP $map
     * @property-read _IH_User_CP $filter
     * @property-read _IH_User_CP $unique
     * @property-read _IH_User_CP $groupBy
     * @property-read _IH_User_CP $sortBy
     * @property-read _IH_User_CP $contains
     * @property-read _IH_User_CP $sum
     * @property-read _IH_User_CP $until
     * @property-read _IH_User_CP $every
     * @property-read _IH_User_CP $average
     * @property-read _IH_User_CP $some
     * @property-read _IH_User_CP $skipWhile
     * @property-read _IH_User_CP $sortByDesc
     * @property-read _IH_User_CP $takeUntil
     * @property-read _IH_User_CP $avg
     * @property-read _IH_User_CP $skipUntil
     * @property-read _IH_User_CP $first
     * @property-read _IH_User_CP $takeWhile
     * @property-read _IH_User_CP $min
     * @property-read _IH_User_CP $reject
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method DatabaseNotification|null getOrPut($key, $value)
     * @method DatabaseNotification|$this shift(int $count = 1)
     * @method DatabaseNotification|null firstOrFail($key = null, $operator = null, $value = null)
     * @method DatabaseNotification|$this pop(int $count = 1)
     * @method DatabaseNotification|null pull($key, $default = null)
     * @method DatabaseNotification|null last(callable $callback = null, $default = null)
     * @method DatabaseNotification|$this random(int|null $number = null)
     * @method DatabaseNotification|null sole($key = null, $operator = null, $value = null)
     * @method DatabaseNotification|null get($key, $default = null)
     * @method DatabaseNotification|null first(callable $callback = null, $default = null)
     * @method DatabaseNotification|null firstWhere(string $key, $operator = null, $value = null)
     * @method DatabaseNotification|null find($key, $default = null)
     * @method DatabaseNotification[] all()
     * @property-read _IH_DatabaseNotification_CP $keyBy
     * @property-read _IH_DatabaseNotification_CP $partition
     * @property-read _IH_DatabaseNotification_CP $max
     * @property-read _IH_DatabaseNotification_CP $doesntContain
     * @property-read _IH_DatabaseNotification_CP $flatMap
     * @property-read _IH_DatabaseNotification_CP $each
     * @property-read _IH_DatabaseNotification_CP $map
     * @property-read _IH_DatabaseNotification_CP $filter
     * @property-read _IH_DatabaseNotification_CP $unique
     * @property-read _IH_DatabaseNotification_CP $groupBy
     * @property-read _IH_DatabaseNotification_CP $sortBy
     * @property-read _IH_DatabaseNotification_CP $contains
     * @property-read _IH_DatabaseNotification_CP $sum
     * @property-read _IH_DatabaseNotification_CP $until
     * @property-read _IH_DatabaseNotification_CP $every
     * @property-read _IH_DatabaseNotification_CP $average
     * @property-read _IH_DatabaseNotification_CP $some
     * @property-read _IH_DatabaseNotification_CP $skipWhile
     * @property-read _IH_DatabaseNotification_CP $sortByDesc
     * @property-read _IH_DatabaseNotification_CP $takeUntil
     * @property-read _IH_DatabaseNotification_CP $avg
     * @property-read _IH_DatabaseNotification_CP $skipUntil
     * @property-read _IH_DatabaseNotification_CP $first
     * @property-read _IH_DatabaseNotification_CP $takeWhile
     * @property-read _IH_DatabaseNotification_CP $min
     * @property-read _IH_DatabaseNotification_CP $reject
     * @mixin DatabaseNotificationCollection
     */
    class _IH_DatabaseNotification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method DatabaseNotification baseSole(array|string $columns = ['*'])
     * @method DatabaseNotification create(array $attributes = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null|_IH_DatabaseNotification_C|DatabaseNotification[] find($id, array $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOrFail($id, array $columns = ['*'])
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DatabaseNotification[]|_IH_DatabaseNotification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DatabaseNotification[]|_IH_DatabaseNotification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DatabaseNotification sole(array|string $columns = ['*'])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_DatabaseNotification_QB read()
     * @method _IH_DatabaseNotification_QB unread()
     */
    class _IH_DatabaseNotification_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Passport {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Passport\AuthCode;
    use Laravel\Passport\Client;
    use Laravel\Passport\PersonalAccessClient;
    use Laravel\Passport\RefreshToken;
    use Laravel\Passport\Token;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method AuthCode|null getOrPut($key, $value)
     * @method AuthCode|$this shift(int $count = 1)
     * @method AuthCode|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AuthCode|$this pop(int $count = 1)
     * @method AuthCode|null pull($key, $default = null)
     * @method AuthCode|null last(callable $callback = null, $default = null)
     * @method AuthCode|$this random(int|null $number = null)
     * @method AuthCode|null sole($key = null, $operator = null, $value = null)
     * @method AuthCode|null get($key, $default = null)
     * @method AuthCode|null first(callable $callback = null, $default = null)
     * @method AuthCode|null firstWhere(string $key, $operator = null, $value = null)
     * @method AuthCode|null find($key, $default = null)
     * @method AuthCode[] all()
     * @property-read _IH_AuthCode_CP $keyBy
     * @property-read _IH_AuthCode_CP $partition
     * @property-read _IH_AuthCode_CP $max
     * @property-read _IH_AuthCode_CP $doesntContain
     * @property-read _IH_AuthCode_CP $flatMap
     * @property-read _IH_AuthCode_CP $each
     * @property-read _IH_AuthCode_CP $map
     * @property-read _IH_AuthCode_CP $filter
     * @property-read _IH_AuthCode_CP $unique
     * @property-read _IH_AuthCode_CP $groupBy
     * @property-read _IH_AuthCode_CP $sortBy
     * @property-read _IH_AuthCode_CP $contains
     * @property-read _IH_AuthCode_CP $sum
     * @property-read _IH_AuthCode_CP $until
     * @property-read _IH_AuthCode_CP $every
     * @property-read _IH_AuthCode_CP $average
     * @property-read _IH_AuthCode_CP $some
     * @property-read _IH_AuthCode_CP $skipWhile
     * @property-read _IH_AuthCode_CP $sortByDesc
     * @property-read _IH_AuthCode_CP $takeUntil
     * @property-read _IH_AuthCode_CP $avg
     * @property-read _IH_AuthCode_CP $skipUntil
     * @property-read _IH_AuthCode_CP $first
     * @property-read _IH_AuthCode_CP $takeWhile
     * @property-read _IH_AuthCode_CP $min
     * @property-read _IH_AuthCode_CP $reject
     */
    class _IH_AuthCode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AuthCode[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AuthCode_QB whereId($value)
     * @method _IH_AuthCode_QB whereUserId($value)
     * @method _IH_AuthCode_QB whereClientId($value)
     * @method _IH_AuthCode_QB whereScopes($value)
     * @method _IH_AuthCode_QB whereRevoked($value)
     * @method _IH_AuthCode_QB whereExpiresAt($value)
     * @method AuthCode baseSole(array|string $columns = ['*'])
     * @method AuthCode create(array $attributes = [])
     * @method _IH_AuthCode_C|AuthCode[] cursor()
     * @method AuthCode|null|_IH_AuthCode_C|AuthCode[] find($id, array $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOrFail($id, array $columns = ['*'])
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOrNew($id, array $columns = ['*'])
     * @method AuthCode first(array|string $columns = ['*'])
     * @method AuthCode firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AuthCode firstOrCreate(array $attributes = [], array $values = [])
     * @method AuthCode firstOrFail(array $columns = ['*'])
     * @method AuthCode firstOrNew(array $attributes = [], array $values = [])
     * @method AuthCode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AuthCode forceCreate(array $attributes)
     * @method _IH_AuthCode_C|AuthCode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AuthCode_C|AuthCode[] get(array|string $columns = ['*'])
     * @method AuthCode getModel()
     * @method AuthCode[] getModels(array|string $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] hydrate(array $items)
     * @method AuthCode make(array $attributes = [])
     * @method AuthCode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AuthCode[]|_IH_AuthCode_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AuthCode[]|_IH_AuthCode_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AuthCode sole(array|string $columns = ['*'])
     * @method AuthCode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AuthCode_QB extends _BaseBuilder {}
    
    /**
     * @method Client|null getOrPut($key, $value)
     * @method Client|$this shift(int $count = 1)
     * @method Client|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Client|$this pop(int $count = 1)
     * @method Client|null pull($key, $default = null)
     * @method Client|null last(callable $callback = null, $default = null)
     * @method Client|$this random(int|null $number = null)
     * @method Client|null sole($key = null, $operator = null, $value = null)
     * @method Client|null get($key, $default = null)
     * @method Client|null first(callable $callback = null, $default = null)
     * @method Client|null firstWhere(string $key, $operator = null, $value = null)
     * @method Client|null find($key, $default = null)
     * @method Client[] all()
     * @property-read _IH_Client_CP $keyBy
     * @property-read _IH_Client_CP $partition
     * @property-read _IH_Client_CP $max
     * @property-read _IH_Client_CP $doesntContain
     * @property-read _IH_Client_CP $flatMap
     * @property-read _IH_Client_CP $each
     * @property-read _IH_Client_CP $map
     * @property-read _IH_Client_CP $filter
     * @property-read _IH_Client_CP $unique
     * @property-read _IH_Client_CP $groupBy
     * @property-read _IH_Client_CP $sortBy
     * @property-read _IH_Client_CP $contains
     * @property-read _IH_Client_CP $sum
     * @property-read _IH_Client_CP $until
     * @property-read _IH_Client_CP $every
     * @property-read _IH_Client_CP $average
     * @property-read _IH_Client_CP $some
     * @property-read _IH_Client_CP $skipWhile
     * @property-read _IH_Client_CP $sortByDesc
     * @property-read _IH_Client_CP $takeUntil
     * @property-read _IH_Client_CP $avg
     * @property-read _IH_Client_CP $skipUntil
     * @property-read _IH_Client_CP $first
     * @property-read _IH_Client_CP $takeWhile
     * @property-read _IH_Client_CP $min
     * @property-read _IH_Client_CP $reject
     */
    class _IH_Client_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Client[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Client_QB whereId($value)
     * @method _IH_Client_QB whereUserId($value)
     * @method _IH_Client_QB whereName($value)
     * @method _IH_Client_QB whereSecret($value)
     * @method _IH_Client_QB whereProvider($value)
     * @method _IH_Client_QB whereRedirect($value)
     * @method _IH_Client_QB wherePersonalAccessClient($value)
     * @method _IH_Client_QB wherePasswordClient($value)
     * @method _IH_Client_QB whereRevoked($value)
     * @method _IH_Client_QB whereCreatedAt($value)
     * @method _IH_Client_QB whereUpdatedAt($value)
     * @method Client baseSole(array|string $columns = ['*'])
     * @method Client create(array $attributes = [])
     * @method _IH_Client_C|Client[] cursor()
     * @method Client|null|_IH_Client_C|Client[] find($id, array $columns = ['*'])
     * @method _IH_Client_C|Client[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Client|_IH_Client_C|Client[] findOrFail($id, array $columns = ['*'])
     * @method Client|_IH_Client_C|Client[] findOrNew($id, array $columns = ['*'])
     * @method Client first(array|string $columns = ['*'])
     * @method Client firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Client firstOrCreate(array $attributes = [], array $values = [])
     * @method Client firstOrFail(array $columns = ['*'])
     * @method Client firstOrNew(array $attributes = [], array $values = [])
     * @method Client firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Client forceCreate(array $attributes)
     * @method _IH_Client_C|Client[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Client_C|Client[] get(array|string $columns = ['*'])
     * @method Client getModel()
     * @method Client[] getModels(array|string $columns = ['*'])
     * @method _IH_Client_C|Client[] hydrate(array $items)
     * @method Client make(array $attributes = [])
     * @method Client newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Client[]|_IH_Client_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Client[]|_IH_Client_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Client sole(array|string $columns = ['*'])
     * @method Client updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Client_QB extends _BaseBuilder {}
    
    /**
     * @method PersonalAccessClient|null getOrPut($key, $value)
     * @method PersonalAccessClient|$this shift(int $count = 1)
     * @method PersonalAccessClient|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PersonalAccessClient|$this pop(int $count = 1)
     * @method PersonalAccessClient|null pull($key, $default = null)
     * @method PersonalAccessClient|null last(callable $callback = null, $default = null)
     * @method PersonalAccessClient|$this random(int|null $number = null)
     * @method PersonalAccessClient|null sole($key = null, $operator = null, $value = null)
     * @method PersonalAccessClient|null get($key, $default = null)
     * @method PersonalAccessClient|null first(callable $callback = null, $default = null)
     * @method PersonalAccessClient|null firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessClient|null find($key, $default = null)
     * @method PersonalAccessClient[] all()
     * @property-read _IH_PersonalAccessClient_CP $keyBy
     * @property-read _IH_PersonalAccessClient_CP $partition
     * @property-read _IH_PersonalAccessClient_CP $max
     * @property-read _IH_PersonalAccessClient_CP $doesntContain
     * @property-read _IH_PersonalAccessClient_CP $flatMap
     * @property-read _IH_PersonalAccessClient_CP $each
     * @property-read _IH_PersonalAccessClient_CP $map
     * @property-read _IH_PersonalAccessClient_CP $filter
     * @property-read _IH_PersonalAccessClient_CP $unique
     * @property-read _IH_PersonalAccessClient_CP $groupBy
     * @property-read _IH_PersonalAccessClient_CP $sortBy
     * @property-read _IH_PersonalAccessClient_CP $contains
     * @property-read _IH_PersonalAccessClient_CP $sum
     * @property-read _IH_PersonalAccessClient_CP $until
     * @property-read _IH_PersonalAccessClient_CP $every
     * @property-read _IH_PersonalAccessClient_CP $average
     * @property-read _IH_PersonalAccessClient_CP $some
     * @property-read _IH_PersonalAccessClient_CP $skipWhile
     * @property-read _IH_PersonalAccessClient_CP $sortByDesc
     * @property-read _IH_PersonalAccessClient_CP $takeUntil
     * @property-read _IH_PersonalAccessClient_CP $avg
     * @property-read _IH_PersonalAccessClient_CP $skipUntil
     * @property-read _IH_PersonalAccessClient_CP $first
     * @property-read _IH_PersonalAccessClient_CP $takeWhile
     * @property-read _IH_PersonalAccessClient_CP $min
     * @property-read _IH_PersonalAccessClient_CP $reject
     */
    class _IH_PersonalAccessClient_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessClient[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PersonalAccessClient_QB whereId($value)
     * @method _IH_PersonalAccessClient_QB whereClientId($value)
     * @method _IH_PersonalAccessClient_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessClient_QB whereUpdatedAt($value)
     * @method PersonalAccessClient baseSole(array|string $columns = ['*'])
     * @method PersonalAccessClient create(array $attributes = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] cursor()
     * @method PersonalAccessClient|null|_IH_PersonalAccessClient_C|PersonalAccessClient[] find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessClient first(array|string $columns = ['*'])
     * @method PersonalAccessClient firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessClient firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstOrFail(array $columns = ['*'])
     * @method PersonalAccessClient firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessClient forceCreate(array $attributes)
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] get(array|string $columns = ['*'])
     * @method PersonalAccessClient getModel()
     * @method PersonalAccessClient[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] hydrate(array $items)
     * @method PersonalAccessClient make(array $attributes = [])
     * @method PersonalAccessClient newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessClient sole(array|string $columns = ['*'])
     * @method PersonalAccessClient updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessClient_QB extends _BaseBuilder {}
    
    /**
     * @method RefreshToken|null getOrPut($key, $value)
     * @method RefreshToken|$this shift(int $count = 1)
     * @method RefreshToken|null firstOrFail($key = null, $operator = null, $value = null)
     * @method RefreshToken|$this pop(int $count = 1)
     * @method RefreshToken|null pull($key, $default = null)
     * @method RefreshToken|null last(callable $callback = null, $default = null)
     * @method RefreshToken|$this random(int|null $number = null)
     * @method RefreshToken|null sole($key = null, $operator = null, $value = null)
     * @method RefreshToken|null get($key, $default = null)
     * @method RefreshToken|null first(callable $callback = null, $default = null)
     * @method RefreshToken|null firstWhere(string $key, $operator = null, $value = null)
     * @method RefreshToken|null find($key, $default = null)
     * @method RefreshToken[] all()
     * @property-read _IH_RefreshToken_CP $keyBy
     * @property-read _IH_RefreshToken_CP $partition
     * @property-read _IH_RefreshToken_CP $max
     * @property-read _IH_RefreshToken_CP $doesntContain
     * @property-read _IH_RefreshToken_CP $flatMap
     * @property-read _IH_RefreshToken_CP $each
     * @property-read _IH_RefreshToken_CP $map
     * @property-read _IH_RefreshToken_CP $filter
     * @property-read _IH_RefreshToken_CP $unique
     * @property-read _IH_RefreshToken_CP $groupBy
     * @property-read _IH_RefreshToken_CP $sortBy
     * @property-read _IH_RefreshToken_CP $contains
     * @property-read _IH_RefreshToken_CP $sum
     * @property-read _IH_RefreshToken_CP $until
     * @property-read _IH_RefreshToken_CP $every
     * @property-read _IH_RefreshToken_CP $average
     * @property-read _IH_RefreshToken_CP $some
     * @property-read _IH_RefreshToken_CP $skipWhile
     * @property-read _IH_RefreshToken_CP $sortByDesc
     * @property-read _IH_RefreshToken_CP $takeUntil
     * @property-read _IH_RefreshToken_CP $avg
     * @property-read _IH_RefreshToken_CP $skipUntil
     * @property-read _IH_RefreshToken_CP $first
     * @property-read _IH_RefreshToken_CP $takeWhile
     * @property-read _IH_RefreshToken_CP $min
     * @property-read _IH_RefreshToken_CP $reject
     */
    class _IH_RefreshToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RefreshToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RefreshToken_QB whereId($value)
     * @method _IH_RefreshToken_QB whereAccessTokenId($value)
     * @method _IH_RefreshToken_QB whereRevoked($value)
     * @method _IH_RefreshToken_QB whereExpiresAt($value)
     * @method RefreshToken baseSole(array|string $columns = ['*'])
     * @method RefreshToken create(array $attributes = [])
     * @method _IH_RefreshToken_C|RefreshToken[] cursor()
     * @method RefreshToken|null|_IH_RefreshToken_C|RefreshToken[] find($id, array $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOrFail($id, array $columns = ['*'])
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOrNew($id, array $columns = ['*'])
     * @method RefreshToken first(array|string $columns = ['*'])
     * @method RefreshToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RefreshToken firstOrCreate(array $attributes = [], array $values = [])
     * @method RefreshToken firstOrFail(array $columns = ['*'])
     * @method RefreshToken firstOrNew(array $attributes = [], array $values = [])
     * @method RefreshToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RefreshToken forceCreate(array $attributes)
     * @method _IH_RefreshToken_C|RefreshToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RefreshToken_C|RefreshToken[] get(array|string $columns = ['*'])
     * @method RefreshToken getModel()
     * @method RefreshToken[] getModels(array|string $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] hydrate(array $items)
     * @method RefreshToken make(array $attributes = [])
     * @method RefreshToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RefreshToken[]|_IH_RefreshToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RefreshToken[]|_IH_RefreshToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RefreshToken sole(array|string $columns = ['*'])
     * @method RefreshToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RefreshToken_QB extends _BaseBuilder {}
    
    /**
     * @method Token|null getOrPut($key, $value)
     * @method Token|$this shift(int $count = 1)
     * @method Token|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Token|$this pop(int $count = 1)
     * @method Token|null pull($key, $default = null)
     * @method Token|null last(callable $callback = null, $default = null)
     * @method Token|$this random(int|null $number = null)
     * @method Token|null sole($key = null, $operator = null, $value = null)
     * @method Token|null get($key, $default = null)
     * @method Token|null first(callable $callback = null, $default = null)
     * @method Token|null firstWhere(string $key, $operator = null, $value = null)
     * @method Token|null find($key, $default = null)
     * @method Token[] all()
     * @property-read _IH_Token_CP $keyBy
     * @property-read _IH_Token_CP $partition
     * @property-read _IH_Token_CP $max
     * @property-read _IH_Token_CP $doesntContain
     * @property-read _IH_Token_CP $flatMap
     * @property-read _IH_Token_CP $each
     * @property-read _IH_Token_CP $map
     * @property-read _IH_Token_CP $filter
     * @property-read _IH_Token_CP $unique
     * @property-read _IH_Token_CP $groupBy
     * @property-read _IH_Token_CP $sortBy
     * @property-read _IH_Token_CP $contains
     * @property-read _IH_Token_CP $sum
     * @property-read _IH_Token_CP $until
     * @property-read _IH_Token_CP $every
     * @property-read _IH_Token_CP $average
     * @property-read _IH_Token_CP $some
     * @property-read _IH_Token_CP $skipWhile
     * @property-read _IH_Token_CP $sortByDesc
     * @property-read _IH_Token_CP $takeUntil
     * @property-read _IH_Token_CP $avg
     * @property-read _IH_Token_CP $skipUntil
     * @property-read _IH_Token_CP $first
     * @property-read _IH_Token_CP $takeWhile
     * @property-read _IH_Token_CP $min
     * @property-read _IH_Token_CP $reject
     */
    class _IH_Token_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Token[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Token_QB whereId($value)
     * @method _IH_Token_QB whereUserId($value)
     * @method _IH_Token_QB whereClientId($value)
     * @method _IH_Token_QB whereName($value)
     * @method _IH_Token_QB whereScopes($value)
     * @method _IH_Token_QB whereRevoked($value)
     * @method _IH_Token_QB whereCreatedAt($value)
     * @method _IH_Token_QB whereUpdatedAt($value)
     * @method _IH_Token_QB whereExpiresAt($value)
     * @method Token baseSole(array|string $columns = ['*'])
     * @method Token create(array $attributes = [])
     * @method _IH_Token_C|Token[] cursor()
     * @method Token|null|_IH_Token_C|Token[] find($id, array $columns = ['*'])
     * @method _IH_Token_C|Token[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrFail($id, array $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrNew($id, array $columns = ['*'])
     * @method Token first(array|string $columns = ['*'])
     * @method Token firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Token firstOrCreate(array $attributes = [], array $values = [])
     * @method Token firstOrFail(array $columns = ['*'])
     * @method Token firstOrNew(array $attributes = [], array $values = [])
     * @method Token firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Token forceCreate(array $attributes)
     * @method _IH_Token_C|Token[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Token_C|Token[] get(array|string $columns = ['*'])
     * @method Token getModel()
     * @method Token[] getModels(array|string $columns = ['*'])
     * @method _IH_Token_C|Token[] hydrate(array $items)
     * @method Token make(array $attributes = [])
     * @method Token newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Token[]|_IH_Token_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Token[]|_IH_Token_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Token sole(array|string $columns = ['*'])
     * @method Token updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Token_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method PersonalAccessToken|null getOrPut($key, $value)
     * @method PersonalAccessToken|$this shift(int $count = 1)
     * @method PersonalAccessToken|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|$this pop(int $count = 1)
     * @method PersonalAccessToken|null pull($key, $default = null)
     * @method PersonalAccessToken|null last(callable $callback = null, $default = null)
     * @method PersonalAccessToken|$this random(int|null $number = null)
     * @method PersonalAccessToken|null sole($key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|null get($key, $default = null)
     * @method PersonalAccessToken|null first(callable $callback = null, $default = null)
     * @method PersonalAccessToken|null firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessToken|null find($key, $default = null)
     * @method PersonalAccessToken[] all()
     * @property-read _IH_PersonalAccessToken_CP $keyBy
     * @property-read _IH_PersonalAccessToken_CP $partition
     * @property-read _IH_PersonalAccessToken_CP $max
     * @property-read _IH_PersonalAccessToken_CP $doesntContain
     * @property-read _IH_PersonalAccessToken_CP $flatMap
     * @property-read _IH_PersonalAccessToken_CP $each
     * @property-read _IH_PersonalAccessToken_CP $map
     * @property-read _IH_PersonalAccessToken_CP $filter
     * @property-read _IH_PersonalAccessToken_CP $unique
     * @property-read _IH_PersonalAccessToken_CP $groupBy
     * @property-read _IH_PersonalAccessToken_CP $sortBy
     * @property-read _IH_PersonalAccessToken_CP $contains
     * @property-read _IH_PersonalAccessToken_CP $sum
     * @property-read _IH_PersonalAccessToken_CP $until
     * @property-read _IH_PersonalAccessToken_CP $every
     * @property-read _IH_PersonalAccessToken_CP $average
     * @property-read _IH_PersonalAccessToken_CP $some
     * @property-read _IH_PersonalAccessToken_CP $skipWhile
     * @property-read _IH_PersonalAccessToken_CP $sortByDesc
     * @property-read _IH_PersonalAccessToken_CP $takeUntil
     * @property-read _IH_PersonalAccessToken_CP $avg
     * @property-read _IH_PersonalAccessToken_CP $skipUntil
     * @property-read _IH_PersonalAccessToken_CP $first
     * @property-read _IH_PersonalAccessToken_CP $takeWhile
     * @property-read _IH_PersonalAccessToken_CP $min
     * @property-read _IH_PersonalAccessToken_CP $reject
     */
    class _IH_PersonalAccessToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PersonalAccessToken_QB whereId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableType($value)
     * @method _IH_PersonalAccessToken_QB whereName($value)
     * @method _IH_PersonalAccessToken_QB whereToken($value)
     * @method _IH_PersonalAccessToken_QB whereAbilities($value)
     * @method _IH_PersonalAccessToken_QB whereLastUsedAt($value)
     * @method _IH_PersonalAccessToken_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessToken_QB whereUpdatedAt($value)
     * @method PersonalAccessToken baseSole(array|string $columns = ['*'])
     * @method PersonalAccessToken create(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken|null|_IH_PersonalAccessToken_C|PersonalAccessToken[] find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessToken first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] hydrate(array $items)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessToken_QB extends _BaseBuilder {}
}