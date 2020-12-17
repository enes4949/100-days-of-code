# Switch on the Gravity

Given a 2D array of some suspended blocks (represented as hastags), return another 2D array which shows the end result once gravity is switched on.

## Examples
```text
switchGravityOn([
  ["-", "#", "#", "-"],
  ["-", "-", "-", "-"],
  ["-", "-", "-", "-"],
  ["-", "-", "-", "-"]
]) ➞ [
  ["-", "-", "-", "-"],
  ["-", "-", "-", "-"],
  ["-", "-", "-", "-"],
  ["-", "#", "#", "-"]
]

switchGravityOn([
  ["-", "#", "#", "-"],
  ["-", "-", "#", "-"],
  ["-", "-", "-", "-"],
]) ➞ [
  ["-", "-", "-", "-"],
  ["-", "-", "#", "-"],
  ["-", "#", "#", "-"]
]

switchGravityOn([
  ["-", "#", "#", "#", "#", "-"],
  ["#", "-", "-", "#", "#", "-"],
  ["-", "#", "-", "-", "-", "-"],
  ["-", "-", "-", "-", "-", "-"]
]) ➞ [
  ["-", "-", "-", "-", "-", "-"],
  ["-", "-", "-", "-", "-", "-"],
  ["-", "#", "-", "#", "#", "-"],
  ["#", "#", "#", "#", "#", "-"]
]
```